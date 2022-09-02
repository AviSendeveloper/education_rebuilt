<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function editProfile() {
        // return $data = User::where('id', Auth::User()->id)->first();
        return view('user.profile');
    }
    
    public function editProfileUpload(Request $request) {
        // return $request->all();
        $data = User::where('id', Auth::User()->id)->first();
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->title = $request->title;
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileFirstName = $file->getClientOriginalName();
            $filename = time() ."-". $fileFirstName;
            $file->move('uploads/profile/', $filename);
            $data->dp = $filename;
        }
        $data->save();
        return redirect()->back();
    }
}
