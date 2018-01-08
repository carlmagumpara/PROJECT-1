<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalCaseType extends Model
{
    protected $table = 'legal_case_types';

    protected $fillable = [
        'type',
        'description',
    ];
}
