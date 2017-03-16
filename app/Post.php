<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'publish_date', 'tags', 'permanent_link', 'location', 'body'];

    public function blog() {
        return $this->belongsTo('App\Blog');
    }

    public function comments() {
        return $this->hasMany('App\PostComment');
    }
}
