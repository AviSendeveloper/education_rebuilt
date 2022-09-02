<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function registerUpload(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $check = admin::where('email', $email)->first();
        if ($check) {
            $message = "You are already register";
            session::flash('error', $message);
            return redirect('/admin-login');
        }else {
            $data = new admin;
            $data->name = $request->name;
            $data->email = $email;
            $data->password = bcrypt($password);
            $data->status = 0;
            $data->save();
            $message = "You are successfully register";
            session::flash('error', $message);
            return redirect('/admin-login');
        }
    }
     public function loginCheck(Request $request) {
        //  return $request->all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
            //   return "hi";
                $UserStatus =admin::where('email',$data['email'])->first();
                if ($UserStatus->status==0 && $UserStatus->user_type==null) {
                    Auth::logout();
                    return redirect()->back();
                }
                return redirect('/admin-index');  
            }else {
                $message= "Invalid User or Password";
                Session::flash('success',$message);
                return redirect()->back();
            }
        }
        
    }

    public function logout()
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
    
    
    public function adminDelete($id) {
        $data = admin::find($id);
        $data->delete();
        return redirect()->back();
    }
  
  	// forgot password
    public function forgotPassword() {
        return view('admin.forgot-password');
    }
 
    public function confirmPassword(Request $request) {
        $email = $request->email;
        $adminInfo = Admin::where('email', $email)->first();
        if ($adminInfo) {
            // checking account status
            if ($adminInfo->status != 1) {
                $message = "Your account is not activated";
                session::flash('error', $message);
                return redirect('/admin-login');
            } else {
                $massageData = [
                    'email' =>$email ,
                    'code' => base64_encode($email)
                ];
                Mail::send('email.admin-password-confirmation', $massageData, function($message) use($email) {
                    $message->to($email)->subject('Password change mail for ParentTeacherHub account');
                });
                // $msg = "Register successfully, to activate account check your email";
                $message = "To change your account password check your mail";
                session::flash('success', $message);
                return redirect('/admin-login');
            }
        } else {
            $message = "Please register first!!";
            session::flash('error', $message);
            return redirect('/admin-login');
        }
    }
 
    public function changePassword($code) {
        // decoding code and getting email
        $email = base64_decode($code);    
        return view('admin.change-password')->with(compact('email'));
    }
 
    public function passwordChange(Request $request) {
        // return $request->email;
        $newPassword = bcrypt($request->password);
        $data = Admin::where('email', $request->email)->first();
        Admin::where('email', $request->email)->update(['password'=>$newPassword]);
        $email = $request->email;
        // $massageData = [
        //         'email' =>$email ,
        //         'name' =>$data['name'],
        //         'code' => base64_encode($email)
        //     ];
        // Mail::send('email.new-password', $massageData, function($message) use($email) {
        //     $message->to($email)->subject('Change Password - Quickmints');
        // });
 
        $message = "Your password change successfully";
        session::flash('success', $message);
        return redirect('/admin-login');
    }
}
