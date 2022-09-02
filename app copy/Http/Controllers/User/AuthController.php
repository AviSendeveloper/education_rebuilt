<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function registerPage() {
    //     return view('user.register');
    // }

    public function save(Request $request) {
        // return $request->all();
        $count = User::where('email',$request->email)->count();
        $statusCheck = User::where('email',$request->email)->first();
        if ($count>=1 && $statusCheck->status == 0) {
            $message = 'You have already registered but your account is not activated yet. Please verify your email to login. To resend verification link again click here';
            session::flash('success', $message);
            session(['user_id' => $statusCheck['id']]);
            return redirect()->back();
        } elseif ($count>=1) {
            $message = "You have already registered";
            session::flash('success', $message);
            return redirect()->back();
        } else{
            $data = new User;
            $data->firstname = $request->firstname;
            $data->lastname = $request->lastname;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->title = $request->title;
            $data->status = 0;
            $data->save();
            // Send confirmation registration mail
            $email = $request->email;
            $massageData = [
                'firstname' => $request->firstname,
                'email' => $request->email,
                'code' => base64_encode($request->email)
            ];
            Mail::send('email.confirmation', $massageData, function($message) use($email) {
                $message->to($email)->subject('Account Registration for parentteacherhub.com');
            });
            $message = "A verification email has been sent. Please check spam folder if you do not see the email in inbox";
            session::flash('success', $message);
            return redirect('/');
        }
    }

    // login part

    // public function loginPage() {
    //     return view('user.login');
    // }

    public function loginCheck(Request $request) {
        // return $request->all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            session::forget('error');
            session::forget('success');
            
            if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                //check email is activate or not
                $UserStatus = user::where('email',$data['email'])->first();
                if ($UserStatus->status==0) {
                    Auth::logout();
                    $message = "Your Account is not activated yet. Please verify your email to login. To send verification link again click here.";
                    session::put('error',$message);
                    return redirect()->back();
                }
                return redirect()->back();  
            }else {
                $message= "Invalid User or Password";
                Session::flash('error',$message);
                return redirect()->back();
            }
        }
    }

    public function emailConfirmation($code) {
        // decoding code and getting email
        $email = base64_decode($code);
        // check email exist
        $userInfo = User::where('email', $email)->first();
        if ($userInfo) {
            // checking account status
            if ($userInfo->status == 1) {
                $message = "Your account already activated";
                session::flash('success', $message);
                return redirect('/');
            } else {
                // Send welcome registration mail
                $email = $userInfo->email;
                User::where('email', $email)->update(['status'=>1]);
                $message = "Mail verified Successfully";
                session::flash('success', $message);
                return redirect('/');
            }
        } else {
            abort(404);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
    // forgot password
    public function forgotPassword() {
        return view('user.forgot-password');
    }
 
    public function confirmPassword(Request $request) {
        $email = $request->email;
        $userInfo = User::where('email', $email)->first();
        if ($userInfo) {
            // checking account status
            if ($userInfo->status != 1) {
                $message = "Your account is not activated";
                session::flash('error', $message);
                return redirect('/');
            } else {
                $massageData = [
                    'email' =>$email ,
                    'code' => base64_encode($email)
                ];
                Mail::send('email.password-confirmation', $massageData, function($message) use($email) {
                    $message->to($email)->subject('Password Change email for ParentTeacherHub.com');
                });
                // $msg = "Register successfully, to activate account check your email";
                $message = "To change your account password check your mail";
                session::flash('success', $message);
                return redirect('/');
            }
        } else {
            $message = "Please register first!!";
            session::flash('error', $message);
            return redirect('/');
        }
    }
 
    public function changePassword($code) {
        // decoding code and getting email
        $email = base64_decode($code);    
        return view('user.change-password')->with(compact('email'));
    }
 
    public function passwordChange(Request $request) {
        // return $request->email;
        $newPassword = bcrypt($request->password);
        $data = User::where('email', $request->email)->first();
        User::where('email', $request->email)->update(['password'=>$newPassword]);
        $email = $request->email;
        // $massageData = [
        //         'email' =>$email ,
        //         'name' =>$data['name'],
        //         'code' => base64_encode($email)
        //     ];
        // Mail::send('email.new-password', $massageData, function($message) use($email) {
        //     $message->to($email)->subject('Change Password - Quickmints');
        // });
 
        $message = "Your password is changed successfully";
        session::flash('success', $message);
        return redirect('/');
    }
    
    public function resendVerificationLink($user_id) {
        return $data = User::where('id', $user_id)->first();
        // Send confirmation registration mail
        $email = $data->email;
        $massageData = [
            'firstname' => $data->firstname,
            'email' => $data->email,
            'code' => base64_encode($data->email)
        ];
        Mail::send('email.confirmation', $massageData, function($message) use($email) {
            $message->to($email)->subject('Confirmation mail to activate your account');
        });
        $message = "Verification mail send again, to activate account check your email";
        session::flash('success', $message);
        return redirect('/');
    }
}
