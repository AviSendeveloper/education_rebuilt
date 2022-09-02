<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;

class Comment extends Model
{
    use HasFactory;

    public function answerCount($question_id) {
        $answerCount = Comment::where('question_id', $question_id)->count();
        return $answerCount;
    }
    
    public function totalAnswer() {
        $questionCount = Question::all()->count();
        $answerCount = Comment::all()->count();
        $userCount = Comment::select('user_id')->distinct()->get()->count();
        $statArr = array($questionCount, $answerCount, $userCount);
        return $statArr;
    }
}
