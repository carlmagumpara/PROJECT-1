<?php

namespace App\Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
    	'admin_id',
    	'title',
    	'body',
        'slug',
    ];

    public function user()
    {
          return $this->belongsTo('App\Modules\Admin\Models\Admin', 'id', 'admin_id')->withTrashed();
    }

}
