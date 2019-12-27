<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseDocument extends Model
{
	protected $guarded = [];
    
    public function case(){
    	return $this->belongsTo('App\ReportedCase');
    }

    public function case_upload(){
    	return $this->belongsTo('App\CaseUpload');
    }

    public function document(){
    	return $this->hasOne('App\Document');
    }
}
