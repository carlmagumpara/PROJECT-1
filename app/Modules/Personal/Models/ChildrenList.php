<?php

namespace App\Modules\Personal\Models;

use Illuminate\Database\Eloquent\Model;

class ChildrenList extends Model
{
    protected $table = 'children_lists';

    protected $fillable = [
				'user_id',
				'children_info_id',
				'name',
				'gender',
				'birth_date',
				'school',
				'grade_year',
    ];

    public function childrenInfo()
    {
      	return $this->belongsTo('App\ChildrenInfo', 'id', 'children_info_id')->withTrashed();
    }

}
