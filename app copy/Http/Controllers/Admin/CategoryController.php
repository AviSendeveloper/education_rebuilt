<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function showCategory() {
        $categories = Category::orderBy('id', 'DESC')->paginate(5);
        return view('admin.category')->with(compact('categories'));
    }

    public function addCategory(Request $request) {
        // return $request->all();
        $urlCheck = Category::where('url', $request->url)->first();
        if ($urlCheck) {
            $message = "Url is already taken";
            session::flash('error', $message);
            return redirect()->back();
        }
        $data = new Category;
        $data->name = $request->name;
        $data->url = $request->url;
        $data->save();
        $message = "Category added successfully";
        session::flash('success', $message);
        return redirect()->back();
    }

    public function editCategoryShow($id) {
        $category = Category::find($id);
        return view('admin.edit-category')->with(compact('category'));
    }

    public function editCategorySubmit(Request $request) {
        $categry_id = $request->id;
        $category = Category::find($categry_id);
        $category->name = $request->name;
        $category->url = $request->url;
        $category->save();
        $message = "Category edit successfully";
        session::flash('success', $message);
        return redirect('show-category');
    }
    
    public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();
        $message = "Category deleted successfully";
        session::flash('error', $message);
        return redirect()->back();
    }
}
