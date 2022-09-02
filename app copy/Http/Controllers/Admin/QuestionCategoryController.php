<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuestionCategory;
use Illuminate\Support\Facades\Session;

class QuestionCategoryController extends Controller
{
    public function showCategory() {
        $categories = QuestionCategory::orderBy('id', 'DESC')->paginate(5);
        return view('admin.question-category')->with(compact('categories'));
    }

    public function addCategory(Request $request) {
        // return $request->all();
        $urlCheck = QuestionCategory::where('url', $request->url)->first();
        if ($urlCheck) {
            $message = "Url is already taken";
            session::flash('error', $message);
            return redirect()->back();
        }
        $data = new QuestionCategory;
        $data->name = $request->name;
        $data->url = $request->url;
        $data->save();
        $message = "Category added successfully";
        session::flash('success', $message);
        return redirect()->back();
    }

    public function editCategoryShow($id) {
        $category = QuestionCategory::find($id);
        return view('admin.edit-category')->with(compact('category'));
    }

    public function editCategorySubmit(Request $request) {
        $categry_id = $request->id;
        $category = QuestionCategory::find($categry_id);
        $category->name = $request->name;
        $category->url = $request->url;
        $category->save();
        $message = "Category edit successfully";
        session::flash('success', $message);
        return redirect('show-category');
    }
    
    public function deleteCategory($id) {
        $category = QuestionCategory::find($id);
        $category->delete();
        $message = "Category deleted successfully";
        session::flash('error', $message);
        return redirect()->back();
    }
}
