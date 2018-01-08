<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalCaseDetail extends Model
{
    protected $table = 'legal_case_details';

    protected $fillable = [
        'legal_case_id',
        'legal_service',
        'summary',
        'objectives',
        'questions',
        'status',
        'is_hidden',
        'closed',
    ];

    public function legalCase()
    {
          return $this->belongsTo('App\LegalCase', 'id', 'legal_case_id')->withTrashed();
    }

}
