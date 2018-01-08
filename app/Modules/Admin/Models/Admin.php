<?php

namespace App\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\AdminResetPasswordNotification;
use App\Modules\User\Models\User;

class Admin extends User
{
    protected $table = 'admins';

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }

}