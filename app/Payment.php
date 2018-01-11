<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
            'user_id',
            'case_id',
            'case_detail_id',
            'option',
            'bank_name',
            'bank_date_deposited',
            'bank_branch',
            'bank_country',
            'amount',
            'reference_no',
            'cellphone_no',
           	'gcash_type',
            'smartmoney_type',
            'status',
            'confirmed',
    ];

    public function user()
    {
          return $this->belongsTo('App\Modules\User\Models\User', 'id', 'user_id')->withTrashed();
    }

    public function legalCase()
    {
          return $this->belongsTo('App\LegalCase', 'id', 'case_id')->withTrashed();
    }

}
