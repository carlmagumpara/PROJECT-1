<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table = 'personal_infos';

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
            'civil_status',
            'marriage_date',
            'marriage_place',
            'mothers_name',
            'mothers_age',
            'mothers_citizenship',
            'mothers_address',
            'fathers_name',
            'fathers_age',
            'fathers_citizenship',
            'fathers_address',
            'alternate_email',
    ];

      public function user()
      {
            return $this->belongsTo('App\Modules\User\Models\User', 'id', 'user_id')->withTrashed();
      }

}
