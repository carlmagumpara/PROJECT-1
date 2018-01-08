<?php

namespace App\Modules\CorporatePartnership\Models;

use Illuminate\Database\Eloquent\Model;

class BoardOfDirector extends Model
{
    protected $table = 'board_of_directors';

    protected $fillable = [
	      'user_id',
	      'corporate_partnership_info_id',
	      'name',
	      'nationality',
	      'address',
    ];

    public function corporatePartnershipInfo()
    {
        return $this->belongsTo('App\Modules\CorporatePartnership\Models\CorporatePartnershipInfo', 'id', 'corporate_partnership_info_id')->withTrashed();
    }
}
