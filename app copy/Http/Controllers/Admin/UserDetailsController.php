<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UserDetailsController extends Controller
{
    public function userList() {
        $users = User::orderBy('id', 'DESC')->paginate(100);
        return view('admin.user-details')->with(compact('users'));
    }
    
    public function userDetailsExport() {
        return Excel::download(new UserExport, 'user-details.xlsx');
    }
}
