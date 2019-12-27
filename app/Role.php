<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SuperRole;

class Role extends SuperRole
{
    protected $guarded = [];

    public function by()
    {
    	return $this->belongsTo('App\User', 'created_by');
    }
}
