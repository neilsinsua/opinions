<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    public function edit(User $currentUser, User $user)
        //checks if you can edit user
    {
        $currentUser = auth()->user();
        return $currentUser->is($user);
    }
}
