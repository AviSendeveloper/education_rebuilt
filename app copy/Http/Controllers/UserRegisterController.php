<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
class UserRegisterController extends Controller
{
    public function register() {
        return view('register');
    }

    public function UserRegister(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;
            //cheack if user already exist
            $userCount = User::where('email',$data['email'])->count();
            if ($userCount>0) {
                $message= "email is already Exists";
                Session::flash('success',$message);
                return redirect()->back();
            }
            else{
                //register the user
                $user = new User;
                $user->firstname = $data['firstname'];
                $user->lastname = $data['lastname'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();

               
                return redirect('/login');

            }


        }

    }

    public function UserLogin(Request $request){
    	$data = $request->all();
    	 if(Auth::attempt(['email'=>$data['email'], 'password'=>$data['password']])){
    	 	return redirect('/myaccount');
    	 } else{
    	 	$message= "Invalid User or Password";
            Session::flash('success',$message);
            return redirect()->back();
    	 }
    }

   

        public function UserLogout() {
            Auth::logout();
            return redirect('/');
        }
}
