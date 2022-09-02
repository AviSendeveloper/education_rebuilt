<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\User;
use Auth;
use Session;
use Mail;

class LoginController extends Controller
{
     public function registerUpload(Request $request) {
        $email = $request->email;
        $check = admin::where('email', $email)->first();
        if ($check) {
            $message = "You are already register";
            session::flash('error', $message);
            return redirect('/admin-login');
        }else {
            $data = new admin;
            $data->name = $request->name;
            $data->email = $email;
            $data->password = bcrypt($request->password);
            $data->status = 0;
            $data->save();
            return redirect('/admin-login');
        }
    }
    
    public function loginCheck(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                //check email is activate or not
                $UserStatus = Admin::where('email',$data['email'])->first();
                if ($UserStatus->status==0 && $UserStatus->user_type==null) {
                    Auth::logout();
                    $message = "Your Account Is not activated yet!! Plese Confirmyour email for activate!";
                    session::put('error',$message);

                    return redirect()->back();
                }
                // print Auth::guard('admin')->user()->id;die;
                return redirect('/admin-index');  
            }else {
                $message= "Invalid User or Password";
                Session::flash('success',$message);
                return redirect()->back();
            }
        }
        
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin-login');
    }

    public function AdminIndex() {
        $data = admin::all();
        return view('admin.index')->with(compact('data'));
    }

    public function changeStatus(Request $request)
    {
        $user = admin::find($request->user_id);
        $user->status = $request->status;
        $user->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }

    
     public function userTable() {
        $data = User::all();
        return view('admin.user-details')->with(compact('data'));
    }
    
    
     public function adminDelete($id) {
        $data = admin::find($id);
        $data->delete();
        return redirect()->back();
    }


}
