<?php

namespace App\Auth;

use Illuminate\Contracts\Auth\Authenticatable as UserContract;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Str;

class CustomUserProvider extends EloquentUserProvider
{
    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plainPassword = $credentials['password'];
    
        return $this->hasher->check($plainPassword, $user->getAuthPassword()) && 
            $user->username === $credentials['username'];
    }

}
