<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\signup;
use App\Models\adddate;
use App\Models\addslot;
use App\Models\publish;
use App\Models\referral;
use App\Models\User;
use App\Models\slot;
use App\Models\sort;
use App\Models\setting;
use App;
use DB;
use Mail;

class MyAccountController extends Controller
{
   public function myaccount()
    {	
    	if (Auth::check()) {
            $signup = signup::with('adddate')->where('user_id', Auth::user()->id)->get();
            $adddate = adddate::where('publish', 'done')->where('user_id', Auth::user()->id)->paginate(3);
            // $adddate = json_decode(json_encode($adddate), true);
            // echo "<pre>";print_r($adddate);die;
    		return view('slot/myaccount')->with(compact('adddate','signup'));
    	} else{
    	    $message = "After login you can book slot";
            session::flash('error', $message);
    		return redirect('/');
    	}
    	
    }

    public function share()
    {	
    	if (Auth::check()) {
    		if (Session::has('signup_id')) {
    		$code = base64_encode(Session::get('signup_id'));
    		$id = base64_encode(Auth::User()->id);
    		$signup = signup::where('id',Session::get('signup_id'))->first();
            adddate::where('signup_id', Session::get('signup_id'))->update(['publish'=>'done', 'url'=>'share/'.$code.'/'.$id]);
    			return view('slot/share')->with(compact('code','id','signup'));
    		}
    		return redirect('/myaccount');
    	} else{
    	    $message = "After login you open this page";
            session::flash('error', $message);
    		return redirect()->back();
    	}
    	
    }

     public function CheckReferral($code, $id) {
        $signup_id = base64_decode($code);
        $form_user_id = base64_decode($id);
         $sort = sort::where('signup_id', $signup_id)->first(); 
         if($sort->type_of_sort=="single_date")
         {
             $adddate = adddate::where('signup_id', $signup_id)->get()->groupBy(function($item) {
            return $item['date'];
        });
        // $adddate = array($adddate);
        // $adddate = json_decode(json_encode($adddate));
        // print "<pre>"; print_r($adddate); die;

         $signup = signup::where('id',$signup_id)->first();
        $user = User::where('id', $form_user_id)->first();
        $url = url()->current();
        Session::put('url', $url);
        return view('slot/slot-only-view-details')->with(compact('adddate','signup','form_user_id','user')); 
         }else{
             $adddate = adddate::where('signup_id', $signup_id)->get()->groupBy(function($item) {
            return $item['date'];
        });
        // $adddate = array($adddate);
        // $adddate = json_decode(json_encode($adddate));
        // print "<pre>"; print_r($adddate); die;

         $signup = signup::where('id',$signup_id)->first();
        $user = User::where('id', $form_user_id)->first();
        $url = url()->current();
        Session::put('url', $url);
        return view('slot/view-details')->with(compact('adddate','signup','form_user_id','user'));      
         }
       
    }

    public function editGroup($addslot_id , $adddate_id)
    {
         $refer = referral::where('addslot_id', $addslot_id)->where('adddate_id', $adddate_id)->get();
         $adddate = adddate::where('id', $adddate_id)->first();
           $addslot = addslot::where('id', $addslot_id)->where('signup_id', $adddate['signup_id'])->first();
           $refer_by = signup::where('id', $adddate['signup_id'])->first();
        
        return view('slot.edit-group')->with(compact('refer','adddate','addslot','refer_by'));
    }

    public function deleteAcceptedUser($id)
    {
         $data = referral::find($id);
         $data->delete();
        return redirect()->back();
    }

    public function addMember(Request $request) {
         $data = $request->all();
        
        $count_member  = addslot::where('id', $request->addslot_id)->where('signup_id',$request->signup_id)->first();
        $addslot  = addslot::where('id', $request->addslot_id)->where('signup_id',$request->signup_id)->first();
        $adddates  = adddate::where('id', $request->adddate_id)->where('signup_id',$request->signup_id)->first();
         $sort  = sort::where('signup_id', $request->signup_id)->first();
        $signup  = signup::where('id', $request->signup_id)->first();
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
            $data->adddate_id                          = $request->adddate_id;
            $data->addslot_id                          = $request->addslot_id;
            $data->comment                             = $request->comment;
            $data->quantity                            = 1;
            $data->member_firstname                    = $request->member_firstname;
            $data->member_lastname                     = $request->member_lastname;
            $data->member_email                        = $request->member_email;
            $data->save();
             
            
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
                    'adddate' => $adddates,
                    'addslot' => $addslot,
                    'user' => $user,
                    'quantity'=>1,
    
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
            return redirect()->back();
        } else {
            $message = "Email is already inserted in the group!!";
            Session::flash('error', $message);
            return redirect()->back();
        }  
        
        } else {
            $message = "Slot is already full!!";
            Session::flash('error', $message);
            return redirect()->back();
        }
    }


    
    public function editCreatedGroup($id) {
      
        $signup_id = $id;
        $detail = signup::where('id',$id)->first();
        $adddate = adddate::where('signup_id', $signup_id)->orderBy('date','ASC')->get();
        $ss = adddate::where('signup_id', $signup_id)->get()->groupBy(function($item) {
           return $item['date'];
           
      });
        $ss = json_decode(json_encode($ss), true);
   //    echo "<pre>";print_r($adddates);die;
        $addslot = addslot::where('signup_id', $signup_id)->orderBy('tslot','ASC')->get();
        $setting = setting::where('signup_id', $signup_id)->first();
       // $field = slot::where('signup_id',Session::get('signup_id'))->first();
        return view('slot/modify-groups')->with(compact('detail', 'adddate','addslot','setting','ss'));   
    }


    public function modifyDesignPublish(Request $request) {
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
            return redirect()->back();
       } else if($request->sortbydate_id) {
          
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
        //    Session::put('signup_id', $request->sortbydate_id);
        return redirect()->back();
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
                return redirect()->back(); 
           }
          
            // Session::put('signup_id', $request->addslot_id);
           return redirect()->back();
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
            //    Session::put('signup_id', $request->detail_id);
               return redirect()->back();
            }else if($request->submit_id){
                // return $request->submit_id;
               $data = sort::where('signup_id', $request->submit_id)->update(['type_of_sort'=>$request->fav_language]);
               $message = "Changed Successfully!!";
               Session::flash('success', $message);
               return redirect()->back();
            } else if($request->setting_id){
                
                $data = setting::where('signup_id', $request->setting_id)->update(['email'=>$request->email, 'email'=>$request->phone]);
                return redirect()->back();
            }
    }


    public function deleteCreatedGroup($id) {
         $data = signup::with('adddate')->where('id', $id)->first();
         foreach ($data['adddate'] as $value) {
             adddate::where('id', $value['id'])->delete();
         }
         $data = signup::with('adddate')->where('id', $id)->delete();
        //  swarna($data);
        return redirect()->back();
    }
    
            public function modifyeditDate($id) {
                $data = adddate::find($id);
                 return view('slot.edit-modify-date')->with(compact('data')); 
              }
           
              public function modifyeditDateForm(Request $request) {
                $data = adddate::find($request->id);
                $data->date = $request->date;
                $data->time1 = $request->time1;
                $data->time2 = $request->time2;
                $data->location = $request->location;
                $data->update();
                 return redirect('/edit-created-group/'.$data->signup_id); 
              }
           
               public function modifyeditRsvp($id) {
                $data = addslot::find($id);
                 return view('slot.edit-modify-rsvp')->with(compact('data')); 
              }

              public function modifyrsvpEditSubmit(Request $request) {
                //   return $request->all();
                 $addslot = addslot::where('id', $request->id)->first();
                  $referralCount = referral::where('addslot_id', $request->id)->count();
                  if($request->number>$referralCount){
                    $data = addslot::find($request->id);
                    $data->tslot = $request->tslot;
                    $data->help = $request->help;
                    $data->number = $request->number;
                    $data->update();
                  return redirect('/edit-created-group/'.$data->signup_id); 
                  } else {
                      $message = "The number entered cannot be less than" .$referralCount. "since" .$referralCount. "slots have already been filled.";
                      Session::flash('error', $message);
                       return redirect()->back(); 
                  }
                
              }
   

}

