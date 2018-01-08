<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    protected $table = 'legal_cases';

    protected $fillable = [
            'user_id',
            'type',
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

}
