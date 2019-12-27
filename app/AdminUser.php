<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    protected $guarded = [];
    protected $with = [];
    
	public function by()
    {
        return $this->belongsTo('App\AdminUser', 'created_by');
    }

    public function department_()
    {
    	return $this->belongsTo('App\Department', 'department');
    }

    public function position_()
    {
    	return $this->belongsTo('App\Position', 'position');
    }

    public function user_info()
    {
        return $this->morphOne('App\User', 'typeable');
    }
}
