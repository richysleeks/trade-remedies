<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	protected $guarded = [];
    
    public function staff()
    {
    	return $this->hasMany('App\AdminUser', 'position');
    }

    public function by()
    {
    	return $this->belongsTo('App\User', 'created_by');
    }
}
