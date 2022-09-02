<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\signup;
use App\Models\slot;
use App\Models\setting;
use App\Models\sort;
use App\Models\User;
use App\Models\referral;
use App\Models\adddate;
use App\Models\addslot;
use Illuminate\Support\Facades\Session;
use Mail;

class UploadDetailsController extends Controller
{
    public function design()
    {	
    	if (Auth::check()) {
    		return view('slot/design');
    	} else{
    		return redirect('/');
    	}
    	
    }

    public function slots()
    {	
        // return session::all();
    	if (Auth::check()) {
            if (session::has('signup_id')) {
                $signup_id = Session::get('signup_id');
                 $detail = signup::where('id',$signup_id)->first();
                 $adddate = adddate::where('signup_id', $signup_id)->orderBy('date','ASC')->get();
                 $addslot = addslot::where('signup_id', $signup_id)->orderBy('tslot','ASC')->get();
                 // echo "<pre>";print_r($addslot);die;
                return view('slot/slots')->with(compact('detail','adddate','addslot'));
            }else {
                return abort(404);
            }
            }
    	 else{
    		return redirect('/');
    	}
    	
    }
     public function setting()
    {   
        if (Auth::check()) {
            if (session::has('signup_id')) {
                $signup_id = Session::get('signup_id');
                 $detail = signup::where('id',Session::get('signup_id'))->first();
                 $adddate = adddate::where('signup_id', $signup_id)->orderBy('date','ASC')->get();
                 $addslot = addslot::where('signup_id', $signup_id)->orderBy('tslot','ASC')->get();
                // $field = slot::where('signup_id',Session::get('signup_id'))->first();
                 return view('slot/setting')->with(compact('detail', 'adddate','addslot'));
            }else {
                return abort(404);
            }
            }
         else{
            return redirect('/');
        }
        
    }

    public function publish()
    {   
        if (Auth::check()) {
            if (session::has('signup_id')) {
                $signup_id = Session::get('signup_id');
                 $detail = signup::where('id',Session::get('signup_id'))->first();
                 $adddate = adddate::where('signup_id', $signup_id)->orderBy('date','ASC')->get();
                 $ss = adddate::where('signup_id', $signup_id)->get()->groupBy(function($item) {
                    return $item['date'];
                    
               });
                 $ss = json_decode(json_encode($ss), true);
            //    echo "<pre>";print_r($adddates);die;
                 $addslot = addslot::where('signup_id', $signup_id)->orderBy('tslot','ASC')->get();
                 $setting = setting::where('signup_id', $signup_id)->first();
                // $field = slot::where('signup_id',Session::get('signup_id'))->first();
                 return view('slot/publish')->with(compact('detail', 'adddate','addslot','setting','ss'));
            }else {
                return abort(404);
            }
            }
         else{
            return redirect('/');
        }
        
    }

    public function groupSubmit(Request $request) {
    	$data = new group;
    	$data->user_id = Auth::user()->id;
    	$data->group = $request->group;
    	$data->save();
    	return redirect()->back();
    }

    public function designSubmit(Request $request) {
        //  dd($request->all());
        // return $request->all();
        
         if ($request->id) {
             // dd($request->all());
            $data = signup::find($request->id);
            $data->title = $request->title;
            $data->group = $request->group;
            $data->category = $request->category;
            $data->cause = $request->cause;
            if($request->hasfile('image')) {
                $file = $request->file('image');
                $fileFirstName = $file->getClientOriginalName();
                $filename = time() ."-". $fileFirstName;
                $file->move('signups/image/', $filename );
                $data->image = $filename;
            }
            $data->save();
            $design_id = $request->id;
            // $design_id_2 = $request->id;
             $detail = signup::where('id',$design_id)->first();
             Session::put('signup_id', $design_id);
             return redirect('/slots');
         }else if($request->sortbydate_id) {
            // return $request->all();
             // dd($request->all());die;
            
            $count = count($request->date);
           for ($i=0; $i<$count; $i++) { 
               $data = new adddate;
               $data->signup_id = $request->sortbydate_id;
               $data->user_id = Auth::user()->id;
               $data->date = $request->date[$i];
               $data->time1 = $request->time1[$i];
               $data->time2 = $request->time2[$i];
               if ($request->addslot_id) {
                    $addslot_id = implode(',',$request->addslot_id);
                     $data->addslot_id = $addslot_id;
               }
              
                $data->location = $request->location[$i];
                $data->save();

           }
            Session::put('signup_id', $request->sortbydate_id);
         return redirect('/slots');
         }else if($request->addslot_id) {
             $request->all();
            // dd($request->all());
              if ($request->adddate_id) {
            $data = new addslot;
            $data->tslot = $request->tslot;
            $data->help = $request->help;
            $data->user_id = Auth::user()->id;
            $data->signup_id = $request->addslot_id;
            $data->number = $request->number;
            $data->save();
           
                 $addcount = count($request->adddate_id);
            for ($i=0; $i < $addcount; $i++) { 
                $dates = adddate::find($request->adddate_id[$i]);
                if ($dates->addslot_id == null) {
                    $dates->addslot_id = $data->id;
                } else{
                    $dates->addslot_id = $dates->addslot_id.','.$data->id;
                }
                
                $dates->save();
               }
            }else{
                $message = "First select the date!!";
                Session::flash('error', $message);
                 return redirect('/slots'); 
            }
           
             Session::put('signup_id', $request->addslot_id);
            return redirect('/slots');
             }else if($request->detail_id){
                $item = new addslot;
                $item->tslot = $request->tslot;
                $item->user_id = Auth::user()->id;
                $item->help = $request->help;
                $item->number = $request->number;
                $item->signup_id = $request->detail_id;
                $item->save();

                $data = new adddate;
                $data->signup_id = $request->detail_id;
                $data->addslot_id = $item->id;
                $data->user_id = Auth::user()->id;
                $data->date = $request->date;
                $data->time1 = $request->time1;
                $data->time2 = $request->time2;
                $data->location = $request->location;
                $data->save();
                Session::put('signup_id', $request->detail_id);
                return redirect('/slots');
             }else if($request->submit_id){
                 
                $data = new sort;
                $data->signup_id = $request->submit_id;
                 $data->type_of_sort = $request->fav_language;
                 $data->save();
                 if($request->timezone1 == "Select Timezone") {
                     signup::where('id', $request->submit_id)->update(['timezone'=>$request->timezone]);
                 } else {
                     signup::where('id', $request->submit_id)->update(['timezone'=>$request->timezone1]);
                 }
                 
                 return redirect('/setting');
             } else {
            $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,webp',
        ]);
        $ip =  $request->ip();
        $json     = file_get_contents("http://ipinfo.io/$ip/geo");
        $json     = json_decode($json, true);
            $data = new signup;
        $data->user_id = Auth::user()->id;
        $data->timezone =$json['timezone'];
        $data->title = $request->title;
        $data->group = $request->group;
        $data->category = $request->category;
        $data->cause = $request->cause;
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileFirstName = $file->getClientOriginalName();
            $filename = time() ."-". $fileFirstName;
            $file->move('signups/image/', $filename );
            $data->image = $filename;
        }
        
        $data->save();
         $design_id = $request->id;
            // $design_id_2 = $request->id;
            $detail = signup::where('id',$data->id)->first();
          $detail = signup::orderBy('id','DESC')->first();
          Session::put('signup_id', $data->id);
        return view('slot/slots')->with(compact('detail'));
         }
    	
    }

    public function submitSlot(Request $request) {
        // return $request->all();
        $detail = signup::where('id',Session::get('signup_id'))->first();
        $slot = slot::where('signup_id',Session::get('signup_id'))->get();
        $field = slot::where('signup_id',Session::get('signup_id'))->first();
        sort::where('signup_id', $request->submit_id)->update(['type_of_sort'=>$request->fav_language]); 
        return view('slot/setting')->with(compact('detail', 'slot','field'));
    }

   public function deleteDate($id) {
     adddate::find($id)->delete();
      $message = "The selected date(s) have been deleted.";
        Session::flash('error', $message);
        return redirect()->back(); 
   }
   public function editDate($id) {
     $data = adddate::find($id);
      return view('slot.edit-date')->with(compact('data')); 
   }

   public function editDateForm(Request $request) {
     $data = adddate::find($request->id);
     $data->date = $request->date;
     $data->time1 = $request->time1;
     $data->time2 = $request->time2;
     $data->location = $request->location;
     $data->update();
      return redirect('/slots'); 
   }

    public function editRsvp($id) {
     $data = addslot::find($id);
      return view('slot.edit-rsvp')->with(compact('data')); 
   }

    public function rsvpEditSubmit(Request $request) {
     $data = addslot::find($request->id);
     $data->tslot = $request->tslot;
     $data->help = $request->help;
     $data->number = $request->number;
     $data->update();
      return redirect('/slots'); 
   }

    public function settingTable(Request $request) {
        if ($request->id) {
            $data = signup::find($request->id);
            $data->title = $request->title;
            $data->group = $request->group;
            $data->category = $request->category;
            $data->cause = $request->cause;
            if($request->hasfile('image')) {
                $file = $request->file('image');
                $fileFirstName = $file->getClientOriginalName();
                $filename = time() ."-". $fileFirstName;
                $file->move('signups/image/', $filename );
                $data->image = $filename;
            }
            $data->save();
            $design_id = $request->id;
            // $design_id_2 = $request->id;
             $detail = signup::where('id',$design_id)->first();
             Session::put('signup_id', $design_id);
             return redirect('/setting');
        } else if($request->sortbydate_id) {
            // return $request->all();
             // dd($request->all());die;
            
            $count = count($request->date);
           for ($i=0; $i<$count; $i++) { 
               $data = new adddate;
               $data->signup_id = $request->sortbydate_id;
               $data->user_id = Auth::user()->id;
               $data->date = $request->date[$i];
               $data->time1 = $request->time1[$i];
               $data->time2 = $request->time2[$i];
               if ($request->addslot_id) {
                    $addslot_id = implode(',',$request->addslot_id);
                     $data->addslot_id = $addslot_id;
               }
              
                $data->location = $request->location[$i];
                $data->save();

           }
            Session::put('signup_id', $request->sortbydate_id);
         return redirect('/setting');
         }else if($request->addslot_id) {
             $request->all();
            // dd($request->all());
              if ($request->adddate_id) {
            $data = new addslot;
            $data->user_id = Auth::user()->id;
            $data->tslot = $request->tslot;
            $data->help = $request->help;
            $data->signup_id = $request->addslot_id;
            $data->number = $request->number;
            $data->save();
           
                 $addcount = count($request->adddate_id);
            for ($i=0; $i < $addcount; $i++) { 
                $dates = adddate::find($request->adddate_id[$i]);
                if ($dates->addslot_id == null) {
                    $dates->addslot_id = $data->id;
                } else{
                    $dates->addslot_id = $dates->addslot_id.','.$data->id;
                }
                
                $dates->save();
               }
            }else{
                $message = "First select the date!!";
                Session::flash('error', $message);
                 return redirect('/setting'); 
            }
           
             Session::put('signup_id', $request->addslot_id);
            return redirect('/setting');
             }else if($request->detail_id){
                //  return Auth::user()->id; 
                $item = new addslot;
                $item->tslot = $request->tslot;
                $item->user_id = Auth::user()->id;
                $item->help = $request->help;
                $item->number = $request->number;
                $item->signup_id = $request->detail_id;
                $item->save();

                $data = new adddate;
                $data->signup_id = $request->detail_id;
                $data->user_id = Auth::user()->id;
                $data->addslot_id = $item->id;
                $data->date = $request->date;
                $data->time1 = $request->time1;
                $data->time2 = $request->time2;
                $data->location = $request->location;
                $data->save();
                Session::put('signup_id', $request->detail_id);
                return redirect('/setting');
             }else if($request->submit_id){
                $data = sort::where('signup_id', $request->submit_id)->update(['type_of_sort'=>$request->fav_language]);
                $message = "Changed Successfully!!";
                Session::flash('success', $message);
                 return redirect('/setting');
             } else {
                 $data = new setting;
                 $data->signup_id = Session::get('signup_id');
                 $data->name = "Required";
                 $data->email = $request->email;
                 $data->phone = $request->phone;
                 $data->save();
                 return redirect('/publish');
             }
            }

             

              public function SettingeditDate($id) {
                $data = adddate::find($id);
                 return view('slot.edit-setting-date')->with(compact('data')); 
              }
           
              public function SettingeditDateForm(Request $request) {
                $data = adddate::find($request->id);
                $data->date = $request->date;
                $data->time1 = $request->time1;
                $data->time2 = $request->time2;
                $data->location = $request->location;
                $data->update();
                 return redirect('/setting'); 
              }
           
               public function SettingeditRsvp($id) {
                $data = addslot::find($id);
                 return view('slot.edit-setting-rsvp')->with(compact('data')); 
              }

              public function SettingrsvpEditSubmit(Request $request) {
                $data = addslot::find($request->id);
                $data->tslot = $request->tslot;
                $data->help = $request->help;
                $data->number = $request->number;
                $data->update();
                 return redirect('/setting'); 
              }


              public function publisheditDate($id) {
                $data = adddate::find($id);
                 return view('slot.edit-publish-date')->with(compact('data')); 
              }
           
              public function publisheditDateForm(Request $request) {
                $data = adddate::find($request->id);
                $data->date = $request->date;
                $data->time1 = $request->time1;
                $data->time2 = $request->time2;
                $data->location = $request->location;
                $data->update();
                 return redirect('/publish'); 
              }
           
               public function publisheditRsvp($id) {
                $data = addslot::find($id);
                 return view('slot.edit-publish-rsvp')->with(compact('data')); 
              }

              public function publishrsvpEditSubmit(Request $request) {
                $data = addslot::find($request->id);
                $data->tslot = $request->tslot;
                $data->help = $request->help;
                $data->number = $request->number;
                $data->update();
                 return redirect('/publish'); 
              }
          public function updatePublish(Request $request) {
            if ($request->id) {
                 $data = signup::find($request->id);
                $data->title = $request->title;
                $data->group = $request->group;
                $data->category = $request->category;
                $data->cause = $request->cause;
                
                if($request->hasfile('image')) {
                    $file = $request->file('image');
                    $fileFirstName = $file->getClientOriginalName();
                    $filename = time() ."-". $fileFirstName;
                    $file->move('signups/image/', $filename );
                    $data->image = $filename;
                }
                $data->save();
                $design_id = $request->id;
                // $design_id_2 = $request->id;
                 $detail = signup::where('id',$design_id)->first();
                 Session::put('signup_id', $design_id);
                 return redirect('/publish');
            } else if($request->sortbydate_id) {
                // return $request->all();
                 // dd($request->all());die;
                
                $count = count($request->date);
               for ($i=0; $i<$count; $i++) { 
                   $data = new adddate;
                   $data->signup_id = $request->sortbydate_id;
                   $data->user_id = Auth::user()->id;
                   $data->date = $request->date[$i];
                   $data->time1 = $request->time1[$i];
                   $data->time2 = $request->time2[$i];
                   if ($request->addslot_id) {
                        $addslot_id = implode(',',$request->addslot_id);
                         $data->addslot_id = $addslot_id;
                   }
                  
                    $data->location = $request->location[$i];
                    $data->save();
    
               }
                Session::put('signup_id', $request->sortbydate_id);
             return redirect('/publish');
             }else if($request->addslot_id) {
                 $request->all();
                // dd($request->all());
                  if ($request->adddate_id) {
                $data = new addslot;
                $data->user_id = Auth::user()->id;
                $data->tslot = $request->tslot;
                $data->help = $request->help;
                $data->signup_id = $request->addslot_id;
                $data->number = $request->number;
                $data->save();
               
                     $addcount = count($request->adddate_id);
                for ($i=0; $i < $addcount; $i++) { 
                    $dates = adddate::find($request->adddate_id[$i]);
                    if ($dates->addslot_id == null) {
                        $dates->addslot_id = $data->id;
                    } else{
                        $dates->addslot_id = $dates->addslot_id.','.$data->id;
                    }
                    
                    $dates->save();
                   }
                }else{
                    $message = "First select the date!!";
                    Session::flash('error', $message);
                     return redirect('/publish'); 
                }
               
                 Session::put('signup_id', $request->addslot_id);
                return redirect('/publish');
                 }else if($request->detail_id){
                    $item = new addslot;
                    $item->tslot = $request->tslot;
                    $item->user_id = Auth::user()->id;
                    $item->help = $request->help;
                    $item->number = $request->number;
                    $item->signup_id = $request->detail_id;
                    $item->save();
    
                    $data = new adddate;
                    $data->signup_id = $request->detail_id;
                    $data->user_id = Auth::user()->id;
                    $data->addslot_id = $item->id;
                    $data->date = $request->date;
                    $data->time1 = $request->time1;
                    $data->time2 = $request->time2;
                    $data->location = $request->location;
                    $data->save();
                    Session::put('signup_id', $request->detail_id);
                    return redirect('/publish');
                 }else if($request->submit_id){
                    $data = sort::where('signup_id', $request->submit_id)->update(['type_of_sort'=>$request->fav_language]);
                    $message = "Changed Successfully!!";
                    Session::flash('success', $message);
                     return redirect('/publish');
                 } else if($request->setting_id){
                     $data = setting::where('signup_id', $request->setting_id)->update(['email'=>$request->email, 'email'=>$request->phone]);
                     return redirect()->back();
                 }
          } 
          
         public function processSignup($adddate_id, $addslot_id) {
           $adddate = adddate::where('id', $adddate_id)->first();
           $addslot = addslot::where('id', $addslot_id)->where('signup_id', $adddate['signup_id'])->first();
           $refer_by = signup::where('id', $adddate['signup_id'])->first();
           $setting = setting::where('signup_id', $adddate['signup_id'])->first();
        //    swarna($adddate);
            return view('slot/process-signup')->with(compact('adddate','addslot','refer_by','setting'));
        }
        
        public function EditprocessSignup($adddate_id, $addslot_id, $refer_id) {
           $adddate = adddate::where('id', $adddate_id)->first();
           $addslot = addslot::where('id', $addslot_id)->where('signup_id', $adddate['signup_id'])->first();
           $refer_by = signup::where('id', $adddate['signup_id'])->first();
           $setting = setting::where('signup_id', $adddate['signup_id'])->first();
           $refer = referral::where('id', $refer_id)->first();
        //    swarna($adddate);
            return view('slot/edit-process-signup')->with(compact('adddate','addslot','refer_by','setting','refer'));
        }

        public function referralAccepted(Request $request) {
            $count_member  = addslot::where('id', $request->addslot_id)->where('signup_id',$request->signup_id)->first();
            $addslot  = addslot::where('id', $request->addslot_id)->where('signup_id',$request->signup_id)->first();
            $adddates  = adddate::where('id', $request->adddate_id)->where('signup_id',$request->signup_id)->first();
            $signup  = signup::where('id', $request->signup_id)->first();
            $sort  = sort::where('signup_id', $request->signup_id)->first();
            $count_refer = referral::where('adddate_id',$request->adddate_id)->where('addslot_id',$request->addslot_id)
                                            ->where('signup_id', $request->signup_id)->count();
            $user_emails = User::where('id', $request->refer_by_id)->first();
                                            
            if($count_refer < $count_member['number']){
            $count_refering = referral::where('adddate_id',$request->adddate_id)->where('addslot_id',$request->addslot_id)
                ->where('signup_id', $request->signup_id)->where('member_email', $request->member_email)->count();
            if( $count_refering < 1){
                $data = new referral;
                $data->refer_by                            = $request->refer_by;
                $data->refer_by_id                         = $request->refer_by_id;
                $data->signup_id                           = $request->signup_id;
                $data->member_phone                           = $request->member_phone;
                $data->adddate_id                          = $request->adddate_id;
                $data->addslot_id                          = $request->addslot_id;
                $data->comment                             = $request->comment;
                $data->quantity                            = $request->quantity;
                $data->member_firstname                    = $request->member_firstname;
                $data->member_lastname                     = $request->member_lastname;
                $data->member_email                        = $request->member_email;
                $data->save();
                 
                Session::put('rererral_id', $data->id);
                Session::put('url', $adddates['url']);
                // Send error mail user
                    $email = $request->member_email;
                    $user = $request->refer_by;
                   $user_email = $user_emails['email'];
                    $massageData = [
                        'refer_id'=>$data->id,
                        'firstname' => $request->member_firstname,
                        'lastname' => $request->member_lastname,
                        'email' => 'email',
                        'tslot'=> $addslot['tslot'],
                        'signup' => $signup,
                        'quantity'=>$request->quantity,
                        'adddate' => $adddates,
                        'addslot' => $addslot,
                        'user' => $user,
        
                    ];
                    if($sort->type_of_sort == "sort_by_date"){
                        Mail::send('email.cart', $massageData, function($message) use($email) {
                        $message->to($email)->subject('Add Member');
                        });
                         Mail::send('email.send-member', $massageData, function($message) use($user_email) {
                            $message->to($user_email)->subject('Member Response');
                        });
                    } else {
                        Mail::send('email.rsvp-signy', $massageData, function($message) use($email) {
                        $message->to($email)->subject('Add Member');
                        });
                         Mail::send('email.rsvp-host', $massageData, function($message) use($user_email) {
                            $message->to($user_email)->subject('Member Response');
                        });
                    }
                
                return redirect('/thanks');
            } else {
                $message = "You are already join the slot!!";
                Session::flash('error', $message);
                return redirect('/'.$adddates['url']);
            }  
            
            } else {
                $message = "No more slots are available for signup. Please check with the host!!";
                Session::flash('error', $message);
                return redirect('/'.$adddates['url']);
            }
            
        }
        
        public function UpdatereferralAccepted(Request $request) {
             $count_member  = addslot::where('id', $request->addslot_id)->where('signup_id',$request->signup_id)->first();
            $addslot  = addslot::where('id', $request->addslot_id)->where('signup_id',$request->signup_id)->first();
            $adddates  = adddate::where('id', $request->adddate_id)->where('signup_id',$request->signup_id)->first();
            $signup  = signup::where('id', $request->signup_id)->first();
            $sort  = sort::where('signup_id', $request->signup_id)->first();
            $count_refer = referral::where('adddate_id',$request->adddate_id)->where('addslot_id',$request->addslot_id)
                                            ->where('signup_id', $request->signup_id)->count();
            $user_emails = User::where('id', $request->refer_by_id)->first();
            
                $refer = referral::find($request->id);
                $refer->member_phone                           = $request->member_phone;
                $refer->comment                             = $request->comment;
                $refer->quantity                            = $request->quantity;
                $refer->member_firstname                    = $request->member_firstname;
                $refer->member_lastname                     = $request->member_lastname;
                $refer->member_email                        = $request->member_email;
                $refer->save();
                  Session::put('rererral_id', $request->id);
                Session::put('url', $adddates['url']);
                // Send error mail user
                    $email = $request->member_email;
                    $user = $request->refer_by;
                   $user_email = $user_emails['email'];
                    $massageData = [
                        'refer_id'=>$request->id,
                        'firstname' => $request->member_firstname,
                        'lastname' => $request->member_lastname,
                        'email' => 'email',
                        'tslot'=> $addslot['tslot'],
                        'signup' => $signup,
                        'quantity'=>$request->quantity,
                        'adddate' => $adddates,
                        'addslot' => $addslot,
                        'user' => $user,
        
                    ];
                    if($sort->type_of_sort == "sort_by_date"){
                        Mail::send('email.cart', $massageData, function($message) use($email) {
                        $message->to($email)->subject('Add Member');
                        });
                         Mail::send('email.send-member', $massageData, function($message) use($user_email) {
                            $message->to($user_email)->subject('Member Response');
                        });
                    } else {
                        Mail::send('email.rsvp-signy', $massageData, function($message) use($email) {
                        $message->to($email)->subject('Add Member');
                        });
                         Mail::send('email.rsvp-host', $massageData, function($message) use($user_email) {
                            $message->to($user_email)->subject('Member Response');
                        });
                    }
                
                return redirect('/thanks');
            
        }


        public function thanks() {
        
            if (Session::has('rererral_id')) {
                $referral = referral::where('id', Session::get('rererral_id'))->first();
                $adddate = adddate::where('id', $referral['adddate_id'])->first();
                 $addslot = addslot::where('id', $referral['addslot_id'])->first();
                 $signup = signup::where('id', $referral['signup_id'])->first();
                 return view('slot/thanks')->with(compact('referral','addslot','signup','referral','adddate'));
            }else{
                $url = session::get('url');
                return redirect('/'.$url);
            }
           
        }

        public function deleteSlotsFromDate($addslot_id, $adddate_id) {
            $data = adddate::where('id', $adddate_id)->first();
            $addslot = explode(',', $data['addslot_id']);
        
            $addslot_id = $addslot_id;
            $colors = $data['addslot_id'];
            
                if (($key = array_search($addslot_id, $addslot)) !== false) {
                  unset($addslot[$key]);
                }
               $implode = implode(',',$addslot);
               adddate::where('id', $adddate_id)->update(['addslot_id'=> $implode]);
                return redirect()->back();
        }

 }

   

 