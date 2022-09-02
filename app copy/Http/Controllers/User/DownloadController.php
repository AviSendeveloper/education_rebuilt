<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Subject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DownloadController extends Controller
{
    public function download($id) {
        if (Auth::check()) {
            $subjectDetails = Subject::find($id);
            $file = $subjectDetails->file;
            // $myFile = public_path('uploads/file/'.$file);
            $myFile = 'uploads/file/'.$file;
            return response::download($myFile);
        }else {
            $message = "You have to login to download the file.";
            session::flash('success', $message);
            return redirect('/');
        }
    }
}
