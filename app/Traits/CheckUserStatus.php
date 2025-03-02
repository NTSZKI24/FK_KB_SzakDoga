<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

trait CheckUserStatus
{
    protected function ensureUserIsActive($user): void
    {
        if (!$user || !$user->status) {
            Auth::logout();
            throw ValidationException::withMessages([
                'email' => ['This account is inactive.'],
            ]);
        }
    }
}