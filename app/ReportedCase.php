<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportedCase extends Model
{
    protected $guarded = [];
    
    public function creator()
    {
    	return $this->belongsTo('App\User', 'created_by');
    }

    public function admin_users(){
    	return $this->hasMany('App\CaseHolder', 'admin_user_id')->where('unassigned_by', NULL)->all();
    }

    public function first_uploaded_doc(){
    	return $this->hasMany('App\CaseDocument');
    }

    public function case_uploads(){
    	return $this->hasMany('App\CaseUpload');
    }
}
