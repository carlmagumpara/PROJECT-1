<?php

namespace App\Modules\Personal\Models;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    protected $table = 'spouse_infos';

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'gender',
        'birth_date',
        'birth_place',
        'address_ph',
        'address_abroad',
        'telephone_no',
        'cellphone_no',
        'age',
        'citizenship',
        'education_attained',
        'school',
        'company_work',
        'nature_of_business',
        'company_address',
        'work_position',
        'work_duration',
        'work_status',
    ];

      public function user()
      {
         return $this->belongsTo('App\User', 'id', 'user_id')->withTrashed();
      }
}
