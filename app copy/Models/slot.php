<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class slot extends Model
{
    use HasFactory;
    
    public static function slot() {
    	if (Auth::check()) {
    		$slot = slot::where('user_id', Auth::user()->id)->get();
    		return $slot;
    	}
    }
}
