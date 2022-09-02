<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserSubject;
use App\Models\UserQuestion;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function downloadSubject($id) {
        $subjectDetails = UserSubject::find($id);
        $file = $subjectDetails->file;
        // $myFile = public_path('uploads/file/'.$file);
        $myFile = 'uploads/file/'.$file;
        return response::download($myFile);
    }

    public function downloadQuestion($id) {
        $questionDetails = UserSubject::find($id);
        $file = $questionDetails->file;
        // $myFile = public_path('uploads/file/'.$file);
        $myFile = 'uploads/file/'.$file;
        return response::download($myFile);
    }
    
    public function downloadImage($image) {
        $myFile = 'signups/image/'.$image;
        return response::download($myFile);
    }
    
}
