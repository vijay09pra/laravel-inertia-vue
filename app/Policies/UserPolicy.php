<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
        public function delete(User $user)
    {
        return $user->email === 'vijay@example.com';
    }
}
