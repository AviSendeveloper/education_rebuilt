<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\QuestionCategory;
use App\Models\Question;
use App\Models\UserQuestion;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function questionFormSubmit(Request $request) {
       $dataCount = Question::count();
       if ($dataCount > 665) {
           return redirect()->back();
       }
        $slugCheck = Question::where('slug', $request->slug)->first();
        if ($slugCheck) {
            $message = "$request->slug slug already exist";
            session::flash('error', $message);
            return redirect()->back();
        }
        $data = new Question;
// return $request->all();
        $data->user_type = 'admin' ;
        $data->user_id = Auth::guard('admin')->User()->id ;
        $data->category = $request->category ;
        $data->question = $request->question ;
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
        $message = "Question is added!!";
        session::flash('success', $message);
        return redirect()->back();
        
    }

    public function showQuestionList() {
        $categories = QuestionCategory::all();
        $data = Question::orderBy('id', 'DESC')->paginate(100);
        return view('admin.add-question')->with(compact('data', 'categories'));
    }

    public function editQuestionList($id) {
        $data = Question::find($id);
        return view('admin.edit-question')->with(compact('data'));
    }  

    public function editQuestion(Request $request) {
        $data = Question::find($request->id);
        $data->category = $request->category ;
        $data->question = $request->question ;
        if ($request->answer) {
            $data->answer = $request->answer;
        }
        $data->slug = $request->slug;
        $data->save();

        $message = "Question edited successfully!!";
        session::flash('success', $message);
        return redirect('/add-question');
    }

    public function deleteQuestionList($id) {
        $data = Question::find($id);
        $data->delete();
        $message = "Question deleted successfully";
        session::flash('error', $message);
        return redirect()->back();
    }



    // user uploaded question

    
    public function userQuestionUploadList() {
        $data = UserQuestion::where('status', 'pending')->orderBy('id', 'DESC')->paginate(100);
        return view('admin.users-question-list')->with(compact('data'));
    }

    public function acceptQuestion($userQuestionID) {
        $details = UserQuestion::where('id', $userQuestionID)->first();
        return view('admin.add-user-question')->with(compact('details'));
    }

    public function acceptQuestionUpload(Request $request) {
        // return $request->all();
        $slugCheck = Question::where('slug', $request->slug)->first();
        if ($slugCheck) {
            $message = "$request->slug slug already exist";
            session::flash('error', $message);
            return redirect()->back();
        }
        $userQuestionID = $request->user_question_id;
        $data = UserQuestion::find($userQuestionID);
        $copyQuestion = new Question;
        $copyQuestion->user_type = 'user' ;
        $copyQuestion->user_id = $data->user_id ;
        $copyQuestion->user_question_id = $data->id ;
        $copyQuestion->category = $data->category ;
        $copyQuestion->question = $data->question ;
        $copyQuestion->description = $data->description ;
        $copyQuestion->slug = $request->slug;
        $copyQuestion->image = $data->image;
        $copyQuestion->save();
        $data->status = 'accept' ;
        $data->save();
        $message = "Subject accept succesfully";
        session::flash('success', $message);
        return redirect('user-upload-question');
    }

    public function denyQuestion($id) {
        $data = UserQuestion::find($id);
        $data->status = 'deny' ;
        $data->save();
        $message = "Subject deny";
        session::flash('error', $message);
        return redirect()->back();
    }
}
