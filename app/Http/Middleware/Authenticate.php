<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
//        return $request->expectsJson() ? null : route('login');
        if ($request->expectsJson()) {
            return null;
        }

        $currentUrl = $request->url();

        if (str_starts_with($currentUrl, route('admin.login.form'))) {
            return route('admin.login.form');
        } elseif (str_starts_with($currentUrl, route('shop.login_form'))) {
            return route('shop.login_form');
        }

        // Mặc định về user
        return route('shop.login_form');
    }

}
