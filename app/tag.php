<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class tag extends Model
{
	
    public function articles(){
    	return $this->belongsTomany('App/Tag');
    }
}
