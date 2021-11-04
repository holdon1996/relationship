<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    public function oneToOne()
    {
        // Lấy số điện thoại của 1 user
        dd(User::find(1)->phone->phone_number);

        // Lấy số điện thoại của từng user
        dd(User::with('phone')->get()->toArray());
    }

    public function inverseOneToOne()
    {
        dd(Phone::find(1)->user->name);

        dd(Phone::with('user')->get()->toArray());
    }

    public function oneToMany()
    {
        dd(User::find(1)->comments()->get()->toArray());
    }

    public function inverseOneToMany()
    {
        dd(User::find(1)->name);

        dd(Comment::with('user')->get()->toArray());
    }

    public function manyToMany()
    {
        dd(User::find(1)->test()->get()->toArray());
        dd(User::find(1)->roles()->get()->toArray());

        // Pivot
        $user = User::find(1);

        foreach ($user->roles as $role) {
            echo $role->pivot->status;
        }

        dd(User::find(1)->roles()->where('status', 1)->get());
    }
}
