<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        $tweets = Tweet::where('user_id', $user->id )->get();
        return view('profiles.show', compact(['user', 'tweets']));
    }
}
