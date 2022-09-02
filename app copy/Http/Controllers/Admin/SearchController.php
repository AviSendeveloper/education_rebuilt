<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subject;
use App\Models\QuestionCategory;
use App\Models\Question;

class SearchController extends Controller
{
    public function searchSubject(Request $request) {
        $categories = Category::all();
        $search = $request->search;
        $data = Subject::where('name', 'LIKE', '%'. $search. '%')->orWhere('description', 'LIKE', '%'. $search. '%')->paginate(100);
        return view('admin.add-subject')->with(compact('data', 'categories'));
    }
    
    public function searchQuestion(Request $request) {
        $categories = QuestionCategory::all();
        $search = $request->search;
        $data = Question::where('question', 'LIKE', '%'. $search. '%')->orWhere('description', 'LIKE', '%'. $search. '%')->paginate(100);
        return view('admin.add-question')->with(compact('data', 'categories'));
    }
}
