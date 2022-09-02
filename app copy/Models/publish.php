<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class publish extends Model
{
    use HasFactory;

    public static function publish()
    {
    	if (Auth::check()) {
    		$publish = publish::where('user_id', Auth::user()->id)->where('publish', 'done')->get()->toArray();
    		return $publish;
    	} 
    }
}
