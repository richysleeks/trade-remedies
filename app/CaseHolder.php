<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseHolder extends Model
{
    protected $guarded = [];
    
    public function admin_user(){
    	return $this->belongsTo('App\User', 'admin_user_id');
    }

    public function case(){
    	return $this->belongsTo('App\ReportedCase');
    }

    public function assigned_by(){
    	return $this->belongsTo('App\User', 'assigned_by');
    }

    public function unassigned_by(){
    	return $this->belongsTo('App\User', 'unassigned_by');
    }
}
