<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    protected $table = 'profile_users';
    protected $fillable = ['first_name', 'last_name', 'avatar', 'twitter_user', 'facebook_user'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
