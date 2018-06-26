<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $loginUser, User $user)
    {
        return $loginUser->id === $user->id;
    }

    public function edit(User $loginUser, User $user)
    {
        return $loginUser->id === $user->id;
    }
}
