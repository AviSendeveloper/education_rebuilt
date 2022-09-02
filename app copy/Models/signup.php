<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signup extends Model
{
    use HasFactory;
     public function adddate() {
        return $this->hasMany('App\Models\adddate')->where('publish','done');
    }
    
    public function refer() {
        return $this->hasMany('App\Models\referral','signup_id');
    }
}
