<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\User;
use App\Models\UserSubject;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    public function SubjectFormSubmit(Request $request) {
        $dataCount = Subject::count();
        if ($dataCount > 678) {
            return redirect()->back();
        }
        $slugCheck = Subject::where('slug', $request->slug)->first();
        if ($slugCheck) {
            $message = "\"$request->slug\" slug already exist";
            session::flash('error', $message);
            return redirect()->back();
        }
        $data = new Subject;

        $data->user_type = 'admin' ;
        $data->user_id = Auth::guard('admin')->User()->id ;
        $data->category = $request->category ;
        $data->name = $request->name ;
        $data->description = $request->description ;
        $data->slug = $request->slug;
       
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileFirstName = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();
            $filename = time() ."-". $fileFirstName;
            $file->move('uploads/image/', $filename );
            $data->image = $filename;
        }

        if($request->hasfile('file')) {
            $file = $request->file('file');
            $fileFirstName = $file->getClientOriginalName();
            // $extension = $file->getClientOriginalExtension();
            $filename = time() ."-". $fileFirstName;
            $file->move('uploads/file/', $filename );
            $data->file = $filename;
        }
       
        $data->save();
        $message = "Subject is added!!";
        session::flash('success', $message);
        return redirect()->back();
        
    }

    public function ShowSubjectList() {
        $categories = Category::all();
        $data = subject::orderBy('id', 'DESC')->paginate(100);
        return view('admin.add-subject')->with(compact('data', 'categories'));
    }

    public function editSubjectList($id) {
        $data = subject::find($id);
        return view('admin.edit-subject')->with(compact('data'));
    }  

    public function editSubmit(Request $request) {
        // return $request->all();
        $data = subject::find($request->id);
        $data->category = $request->category ;
        $data->name = $request->name ;
        $data->description = $request->description ;
        $data->slug = $request->slug;
        $data->save();

        $message = "Subject Was edited!!";
        session::flash('success', $message);
        return redirect('/add-subject');
    }

    public function deleteSubjectList($id) {
        $data = subject::find($id);
        $data->delete();
        $message = "Subject Was deleted!!";
        session::flash('error', $message);
        return redirect()->back();
    }

    public function userSubjectUploadList() {
        $data = UserSubject::where('status', 'pending')->orderBy('id', 'DESC')->paginate(100);
        return view('admin.users-subject-list')->with(compact('data'));
    }
    
    public function acceptSubject($userSubjectID) {
        $details = UserSubject::where('id', $userSubjectID)->first();
        return view('admin.add-user-subject')->with(compact('details'));
    }

    public function acceptSubjectUpload(Request $request) {
        $slugCheck = Subject::where('slug', $request->slug)->first();
        if ($slugCheck) {
            $message = "$request->slug slug already exist";
            session::flash('error', $message);
            return redirect()->back();
        }
        $data = UserSubject::find($request->user_subject_id);
        if ($data->upload_style == 'private') {
            $data->status = 'accept' ;
            $data->save();
        } else {
            $copySubject = new Subject;
            $copySubject->user_type = 'user' ;
            $copySubject->user_id = $data->user_id ;
            $copySubject->user_subject_id = $data->id ;
            $copySubject->category = $data->category ;
            $copySubject->name = $data->name ;
            $copySubject->description = $data->description ;
            $copySubject->slug = $request->slug;
            $copySubject->image = $data->image;
            $copySubject->file = $data->file;
            $copySubject->grade = $data->grade;
            $copySubject->school = $data->school;
            $copySubject->save();
            $data->upload_style = 'public';
            $data->status = 'accept' ;
            $data->save();
        }
        $message = "Subject accept succesfully";
        session::flash('success', $message);
        return redirect('user-upload-subject');
    }

    public function denySubject($id) {
        $data = UserSubject::find($id);
        $data->status = 'deny' ;
        $data->save();
        $message = "Subject deny";
        session::flash('error', $message);
        return redirect()->back();
    }
}
