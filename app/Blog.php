<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['title', 'url', 'theme_id'];

    public function posts() {
        return $this->hasMany('App\Post');
    }
}
