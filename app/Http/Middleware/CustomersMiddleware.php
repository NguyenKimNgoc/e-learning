<?php

namespace App\Http\Middleware;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use Closure;

class CustomersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $customer;
    public function __construct(Guard $auth){
        $this->customer = $auth;
    }
    public function handle($request, Closure $next, $guard='l_customers')
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.',401);
            }else{
                return redirect()->route('loginFrontend');
            }
        }
        return $next($request);
    }
}