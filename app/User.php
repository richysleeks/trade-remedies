<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ResetPassword as ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    
    protected $fillable = [
        'is_active', 'name', 'email', 'password','profile_image', 'created_by', 'typeable_id', 'typeable_type'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getUserProfileImageAttribute()
    {
        return asset('storage/'.$this->profile_image);
    }

    public function isActive()
    {
        return $this->is_active;
    }

    public function user_type(){
        if ($this->typeable_type === "App\AdminUser") {
            return "Admin User";
        } elseif ($this->typeable_type === "App\CaseUser") {
            return "Case User";
        }
    }

    public function cases()
    {
        if($this->user_type() === "Admin User"){
            return $this->hasMany('App\CaseHolder', 'admin_user_id')->where('unassigned_by', NULL)->all();
        }elseif($this->user_type() === "Case User"){
            return $this->hasMany('App\ReportedCase', 'created_by');
        }
    }

    public function typeable()
    {
        return $this->morphTo();
    }

    public function owner()
    {
        return $this->typeable();
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
