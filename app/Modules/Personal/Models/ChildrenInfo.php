<?php

namespace App\Modules\Personal\Models;

use Illuminate\Database\Eloquent\Model;

class ChildrenInfo extends Model
{
    protected $table = 'children_infos';

    protected $fillable = [
	      'user_id',
	      'no_of_children',
	      'custody',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'user_id')->withTrashed();
    }

    public function childrenList()
    {
        return $this->hasOne('App\ChildrenList');
    }

}
