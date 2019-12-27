<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];
    
    public function staff()
    {
    	return $this->hasMany('App\AdminUser', 'department');
    }

    public function by()
    {
    	return $this->belongsTo('App\User', 'created_by');
    }
}
