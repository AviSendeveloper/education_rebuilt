<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function searchSubject(Request $request) {
        $search = $request->search;
        $data = Subject::where('name', 'LIKE', '%'. $search. '%')->orWhere('description', 'LIKE', '%'. $search. '%')->orWhere('school', 'LIKE', '%'. $search. '%')->orWhere('grade', 'LIKE', '%'. $search. '%')->orderBy('id', 'DESC')->paginate(25);
        $categoryName = "Search Result";
        return view('user.index')->with(compact('data', 'categoryName'));
    }

    public function searchQuestion(Request $request) {
        $search = $request->search;
        $data = DB::table('questions')
            ->join('users', 'questions.user_id', '=', 'users.id')
            ->select('users.firstname', 'users.lastname', 'users.title', 'users.dp', 'questions.*')
          	->where('question', 'LIKE', '%'. $search. '%')->orWhere('description', 'LIKE', '%'. $search. '%')
          	->orderBy('id', 'DESC')->paginate(25);
        $categoryName = "Search Result";
        return view('user.question.index')->with(compact('data', 'categoryName'));
    }
}
