<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id')->withPivot('status');
    }

    public function test() {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id')->wherePivot('status', 1);
    }
}
