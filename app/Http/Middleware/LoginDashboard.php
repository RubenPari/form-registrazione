<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Tokens;
use Closure;
use GuzzleHttp\Middleware;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginDashboard
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return string
     */
    public function handle(Request $request, Closure $next)
    {
        // get current token
        $token = (new Tokens)->get_current_token();

        // check if token is valid
        if ($token === null || $token->check_is_valid() === false) {
            return redirect('admin-login');
        } else {
            return $next($request);
        }
    }
}
