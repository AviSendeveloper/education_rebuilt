<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subject;
use App\Models\UserSubject;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

class SubjectController extends Controller
{
    public function index() {
        $data = Subject::orderBy('id', 'DESC')->paginate(25);
        $categoryName = "All Posts";
        return view('user.index')->with(compact('data', 'categoryName'));
    }

    public function subjectListUnderCategory() {
        $currentCaategory = url()->current();
        $currentCaategory = str_replace("https://parentteacherhub.com/", "", $currentCaategory);
        $categoryList = Category::get()->pluck('url')->toArray();
        if (in_array($currentCaategory, $categoryList)) {
            $data = Subject::where('category', $currentCaategory)->orderBy('id', 'DESC')->paginate(25);
            $categoryName = Category::where('url', $currentCaategory)->first()->name;
            return view('user.index')->with(compact('data', 'categoryName'));
        }else {
            abort(404);
        }
    }

    public function subjectDetails() {
      	if (!Auth::check()) {
         	$message = "Please login to view the page";
            session::flash('error', $message);
          	return redirect('/talent-hub');
        }
        $currentRoute = url()->current();
        $currentRoute = str_replace("https://parentteacherhub.com/", "", $currentRoute);
        $subjectList = Subject::get()->pluck('slug')->toArray();
        if (in_array($currentRoute, $subjectList)) {
            $subjectDetails = Subject::where('slug', $currentRoute)->first()->toArray();
            return view('user.grid')->with(compact('subjectDetails'));
        }else {
            abort(404);
        }
    }

    public function uploadSubject(Request $request) {
        // return $request->all();
        $dataCount = Subject::count();
        if ($dataCount > 678) {
            return redirect()->back();
        }
        $data = new UserSubject;
        $data->user_id = Auth::User()->id ;
        $data->user_email = Auth::User()->email ;
        $data->category = $request->category ;
        $data->name = $request->name ;
        $data->description = $request->description ;
        // $data->slug = $request->slug;
       
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileFirstName = $file->getClientOriginalName();
            $filename = time() ."-". $fileFirstName;
            $file->move('uploads/image/', $filename );
            $data->image = $filename;
        }

        if($request->hasfile('file')) {
            $file = $request->file('file');
            $fileFirstName = $file->getClientOriginalName();
            $filename = time() ."-". $fileFirstName;
            $file->move('uploads/file/', $filename );
            $data->file = $filename;
        }
        $data->grade = $request->grade ;
        $data->school = $request->school ;
        $data->upload_style = $request->upload_style ;
        $data->status = 'pending';     
        $data->save();
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        $message = "Your post has been submitted and is pending admin approval";
        session::flash('success', $message);
        return redirect()->back();
    }

    public function uploadSubjectList() {
        if (!Auth::check()) {
            $message = "You have to login to view this option";
            session::flash('error', $message);
            return redirect()->back();
        }
        $data = UserSubject::where('user_id', Auth::User()->id)->orderBy('id', 'DESC')->paginate(25);
        return view('user.user-upload-subject')->with(compact('data'));
    }
    
    public function uploadSubjectDetails($id) {
        $subjectDetails = UserSubject::where('id', $id)->first()->toArray();
        return view('user.user-upload-subject-details')->with(compact('subjectDetails'));
    }
  
  	public function editDetails($id) {
        $subjectDetails = Subject::where('user_subject_id', $id)->first();
        return view('user.edit-subject')->with(compact('subjectDetails'));
    }
    
    public function editDetailsUpload(Request $request) {
        // return $request->all();
        // image and file update
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileFirstName = $file->getClientOriginalName();
            $image_filename = time() ."-". $fileFirstName;
            $file->move('uploads/image/', $image_filename );
        }

        if($request->hasfile('file')) {
            $file = $request->file('file');
            $fileFirstName = $file->getClientOriginalName();
            $file_filename = time() ."-". $fileFirstName;
            $file->move('uploads/file/', $file_filename );
        }
        // edit in Subejct model
        $subjectDetails = Subject::where('user_subject_id', $request->subject_id)->first();
        if ($subjectDetails) {
            $subjectDetails->name = $request->name;
            $subjectDetails->description = $request->description;
            $subjectDetails->grade = $request->grade;
            $subjectDetails->school = $request->school;
            if (isset($image_filename)) {
                $subjectDetails->image = $image_filename;
            }
            if (isset($file_filename)) {
                $subjectDetails->file = $file_filename;
            }
            $subjectDetails->update();
        }
        // edit in UserSubejct model
        $userSubjectDetails = UserSubject::where('id', $request->subject_id)->first();
        $userSubjectDetails->name = $request->name;
        $userSubjectDetails->description = $request->description;
        $userSubjectDetails->grade = $request->grade;
        $userSubjectDetails->school = $request->school;
        if (isset($image_filename)) {
            $userSubjectDetails->image = $image_filename;
        }
        if (isset($file_filename)) {
            $userSubjectDetails->file = $file_filename;
        }
        $userSubjectDetails->update();
        return redirect()->back();
    }

    public function deleteSubject($id) {
        $userSubjectDetails = UserSubject::find($id);
        // delete from Subejct model
        $subjectDetails = Subject::where('user_subject_id', $id)->first();
        if ($subjectDetails) {
            $subjectDetails->delete();
        }
        // delete from UserSubejct model
        $userSubjectDetails->delete();
        $message = "Subject successfully deleted";
        session::flash('error', $message);
        return redirect()->back();
    }
}
