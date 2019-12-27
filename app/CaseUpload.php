<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseUpload extends Model
{
    protected $guarded = [];
    
	public function case(){
    	return $this->belongsTo('App\ReportedCase');
    }

    public function uploaded_by(){
    	return $this->belongsTo('App\User', 'uploaded_by');
    }

    public function approved_visible_by(){
    	return $this->belongsTo('App\User', 'approved_visible_by');
    }

    public function uploader_type(){
    	if($this->uploader_type == 1){
    		return "Admin User"; 
    	}elseif($this->uploader_type == 0){
    		return "Case User";
    	}
    }

    public function visible_to_case_user(){
    	if($this->visible_to_case_user == 1 && $this->approved_visible_to_case_user == 1){
    		return true; 
    	}elseif($this->visible_to_case_user == 0){
    		return false;
    	}
    }

    public function case_document(){
        return $this->hasMany('App\CaseDocument');
    }
}
