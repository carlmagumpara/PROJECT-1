<?php

namespace App\Modules\CorporatePartnership\Models;

use Illuminate\Database\Eloquent\Model;

class Stockholder extends Model
{
    protected $table = 'stockholders';

    protected $fillable = [
	      'user_id',
	      'corporate_partnership_info_id',
	      'name',
	      'nationality',
	      'no_of_share',
        'subscribed_capital',
        'paid_up_capital',
    ];

    public function corporatePartnershipInfo()
    {
        return $this->belongsTo('App\Modules\CorporatePartnership\Models\CorporatePartnershipInfo', 'id', 'corporate_partnership_info_id')->withTrashed();
    }
}
