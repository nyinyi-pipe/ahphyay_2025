<?php

namespace App\Helpers;

class RoleRedirector
{
    public static function redirect($user)
    {
        if ($user->hasRole('superadmin')) return '/admin/dashboard';
        if ($user->hasRole('supplier')) return '/supplier/dashboard';
        if ($user->hasRole('customer')) return '/customer/dashboard';

        return '/';
    }
}
