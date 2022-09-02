<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\QuestionCategory;
use App\Models\Question;
use App\Models\UserQuestion;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class QuestionController extends Controller
{
    public function index() {
        $data = Question::all();
        $data = DB::table('questions')
            ->join('users', 'questions.user_id', '=', 'users.id')
            ->select('users.firstname', 'users.lastname', 'users.title', 'users.dp', 'questions.*')
            ->orderBy('id', 'DESC')->paginate(25);
        $categoryName = "All Questions";
        return view('user.question.index')->with(compact('data', 'categoryName'));
    }

    public function questionListUnderCategory($url) {
        $categoryList = QuestionCategory::get()->pluck('url')->toArray();
        if (in_array($url, $categoryList)) {
            $data = DB::table('questions')
                                ->join('users', 'questions.user_id', '=', 'users.id')
                                ->where('category', $url)
                                ->select('users.firstname', 'users.lastname', 'users.title', 'questions.*')
                                ->orderBy('id', 'DESC')->paginate(25);
            
            $categoryName = QuestionCategory::where('url', $url)->first()->name;
            return view('user.question.index')->with(compact('data', 'categoryName'));
        }else {
            abort(404);
        }
    }

    public function questionDetails() {
      	if (!Auth::check()) {
         	$message = "You have to login to view this answer";
            session::flash('error', $message);
          	return redirect('/question-index');
        }
        $currentRoute = url()->current();
        $currentRoute = str_replace("https://parentteacherhub.com/", "", $currentRoute);
        $questionList = Question::get()->pluck('slug')->toArray();
        if (in_array($currentRoute, $questionList)) {
            $questionDetails = DB::table('questions')
                                        ->join('users', 'users.id', '=', 'questions.user_id')
                                        ->where('slug', $currentRoute)
                                        ->select('users.firstname', 'users.lastname', 'users.title', 'users.dp', 'questions.*')
                                        ->first();
            // comment show start
            $comments = DB::table('comments')
                                ->join('users', 'users.id', '=', 'comments.user_id')
                                ->where('question_id', $questionDetails->id)
                                ->select('users.firstname', 'users.lastname', 'users.title', 'users.dp', 'comments.*')
                                ->get();
            // comment show end
            return view('user.question.answer')->with(compact('questionDetails', 'comments'));
        }else {
            abort(404);
        }
    }

    public function uploadQuestion(Request $request) {
        // return $request->all();
        $dataCount = Question::count();
        if ($dataCount > 665) {
            return redirect()->back();
        }
        $data = new UserQuestion;
        $data->user_id = Auth::User()->id ;
        $data->user_email = Auth::User()->email ;
        $data->category = $request->category ;
        $data->question = $request->question ;
        $data->description = $request->description ;
       
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $fileFirstName = $file->getClientOriginalName();
            $filename = time() ."-". $fileFirstName;
            $file->move('uploads/image/', $filename );
            $data->image = $filename;
        }
        $data->status = 'pending';     
        $data->save();
        Artisan::call('route:clear');
        Artisan::call('view:clear');
        $message = "Your question/post has been submitted and is pending admin approval";
        session::flash('error', $message);
        return redirect()->back();
    }

    public function uploadQuestionList() {
        // $data = UserQuestion::where('user_id', Auth::User()->id)->get();
        // return view('user.question.index')->with(compact('data'));
        if (!Auth::check()) {
            $message = "You have to login to view this option";
            session::flash('error', $message);
            return redirect()->back();
        }
        $data = DB::table('user_questions')
            ->join('users', 'user_questions.user_id', '=', 'users.id')
            ->where('user_id', Auth::User()->id)
            ->select('users.firstname', 'users.lastname', 'users.title', 'users.dp', 'user_questions.*')
            ->orderBy('id', 'DESC')->paginate(25);
        $categoryName = "Your Posts";
        return view('user.question.user-upload-question')->with(compact('data', 'categoryName'));
    }
  
  	public function editDetails($id) {
        $questionDetails = Question::where('user_question_id', $id)->first();
        return view('user.question.edit-question')->with(compact('questionDetails'));
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
        // edit in Question model
        $questionDetails = Question::where('user_question_id', $request->question_id)->first();
        if ($questionDetails) {
            $questionDetails->question = $request->question;
            $questionDetails->description = $request->description;
            if (isset($image_filename)) {
                $questionDetails->image = $image_filename;
            }
            $questionDetails->update();
        }
        // edit in UserQuestion model
        $userQuestionDetails = UserQuestion::where('id', $request->question_id)->first();
        $userQuestionDetails->question = $request->question;
        $userQuestionDetails->description = $request->description;
        if (isset($image_filename)) {
            $userQuestionDetails->image = $image_filename;
        }
        $userQuestionDetails->update();
        return redirect('question-index');
    }

    public function deleteQuestion($id) {
        $userQuestionDetails = UserQuestion::find($id);
        // delete from Question model
        $questionDetails = Question::where('user_question_id', $id)->first();
        if ($questionDetails) {
            $questionDetails->delete();
        }
        // delete from UserQuestion model
        $userQuestionDetails->delete();
        $message = "Question successfully deleted";
        session::flash('error', $message);
        return redirect()->back();
    }
}
