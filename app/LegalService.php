<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LegalService extends Model
{
    protected $table = 'legal_services';

    protected $fillable = [
        'name',
        'fee',
    ];
}
