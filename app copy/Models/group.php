<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class group extends Model
{
    use HasFactory;

    public static function grouping() {
    	if (Auth::check()) {
    		$groups = group::where('user_id', Auth::user()->id)->get()->count();
    		if ($groups<=0) {
    			$group = null;
    			return $group;
    		} else{
    			$group = group::select('group')->where('user_id',Auth::user()->id)->get();

    			return $group;
    		}
    	}
    	
    }
}
