<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exports\SignupGroupExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\signup;
use App\Models\adddate;

class adminController extends Controller
{
    Public function userGroup() {

	    $data = signup::paginate(6); 
	    return view('admin.user-group')->with(compact('data'));
    }
    
    Public function slotDetail($id) {
        $addDates = adddate::where(['signup_id'=>$id, 'publish'=>'done'])->paginate(6);
        // $addDates = json_decode(json_encode($addDates),true);
    //   echo"<pre>";print_r($addDates);die;
       return view('admin.slot-detail')->with(compact('addDates'));
	    
    }

     Public function userRefer() {

		 $data = signup::with('refer')->paginate(6);
    	return view('admin.user-refer')->with(compact('data'));
    }
    
    public function groupDetailsExport() {
        return Excel::download(new SignupGroupExport, 'user-group-details.xlsx');
    }
}
