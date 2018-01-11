<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    protected $table = 'legal_cases';

    protected $fillable = [
            'user_id',
            'legal_problem',
            'confirmed',
            'status',
    ];

    public function user()
    {
          return $this->belongsTo('App\Modules\User\Models\User', 'id', 'user_id')->withTrashed();
    }

    public function legalCaseDetail()
    {
        return $this->hasOne('App\LegalCaseDetail');
    }

    public function legalCaseType()
    {
        return $this->hasOne('App\LegalCaseType');
    }

    public function payment()
    {
        return $this->hasOne('App\Payment', 'case_id', 'id');
    }


}
