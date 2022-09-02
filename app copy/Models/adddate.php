<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class adddate extends Model
{
    use HasFactory;

    public function signup() {
        return $this->belongsTo('App\Models\signup', 'signup_id');
    }

    public static function adddate() {
        if (Auth::check()) {
            $adddate = adddate::where('publish', 'done')->where('user_id', Auth::user()->id)->get();
            return $adddate;
        }
       
    }
}
