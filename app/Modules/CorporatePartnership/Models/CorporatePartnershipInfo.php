<?php

namespace App\Modules\CorporatePartnership\Models;

use Illuminate\Database\Eloquent\Model;

class CorporatePartnershipInfo extends Model
{
    protected $table = 'corporate_partnership_infos';

    protected $fillable = [
				'user_id',
				'company_name',
				'type',
				'principal_office_address',
				'business_address',
				'line_of_business',
				'attach_fill_out',
				'authorized_capital_stock_partnership_capital',
				'no_of_shares',
				'par_value',
				'no_of_shares_subscribed',
				'subscribed_capital',
				'paid_up_capital',
				'fiscal_calendar_year',
				'annual_meeting',
				'president',
				'treasurer',
				'secretary',
				'general_manager',
				'managing_partners',
				'stockholder_type',
    ];

    public function user()
    {
          return $this->belongsTo('App\Modules\User\Models\User', 'id', 'user_id')->withTrashed();
    }

    public function boardOfDirectors()
    {
        return $this->hasMany('App\Modules\CorporatePartnership\Models\BoardOfDirector');
    }


}
