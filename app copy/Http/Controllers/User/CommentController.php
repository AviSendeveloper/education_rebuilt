<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Question;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentUpload(Request $request) {
        $data = new Comment;
        $data->question_id = $request->question_id;
        $data->question_url = $request->question_url;
        $data->user_id = $request->user_id;
        $data->user_name = $request->user_name;
        $data->comment_type = $request->comment_type;
        $data->comment = $request->comment;
        $data->save();
        return redirect()->back();
    }

    public function subCommentUpload(Request $request) {
        $data = new Comment;
        $data->question_id = $request->question_id;
        $data->question_url = $request->question_url;
        $data->user_id = $request->user_id;
        $data->user_name = $request->user_name;
        $data->comment_type = $request->comment_type;
        $data->comment_of = $request->comment_of;
        $data->comment = $request->comment;
        $data->save();
        return redirect()->back();
    }
  
  	public function editComment($comment_id) {
    	$commentDetails = Comment::find($comment_id);
      	return view('user.question.edit-comment')->with(compact('commentDetails'));
    }
  
  	public function editCommentUpload(Request $request) {
    	$data = Comment::find($request->comment_id);
      	$questionUrl = Question::where(['id'=>$data->question_id])->select('slug')->first();
      	$data->comment = $request->comment;
      	$data->save();
      	return redirect($questionUrl->slug);
    }
  
  	public function deleteComment($comment_id) {
    	$commentDetails = Comment::find($comment_id);
      	$commentDetails->delete();
      	return redirect()->back();
    }
}
