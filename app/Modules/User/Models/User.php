<?php

namespace App\Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 
        'password', 
        'type', 
        'activation_code', 
        'status',
        'referred_by', 
        'profile_complete',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personalInfo()
    {
        return $this->hasOne('App\PersonalInfo');
    }

    public function spouseInfo()
    {
        return $this->hasOne('App\Modules\Personal\Models\Spouse');
    }

    public function childrenInfo()
    {
        return $this->hasMany('App\Modules\Personal\Models\ChildrenInfo');
    }

    public function corporatePartnershipInfo()
    {
        return $this->hasOne('App\Modules\CorporatePartnership\Models\CorporatePartnershipInfo');
    }

    public function legalCases()
    {
        return $this->hasMany('App\LegalCase');
    }

}

