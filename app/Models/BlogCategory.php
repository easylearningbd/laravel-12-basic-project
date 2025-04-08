<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $guarded = [];
    
    public function posts()
    {
        return $this->hasMany(BlogPost::class, 'blogcat_id');
    }

}
