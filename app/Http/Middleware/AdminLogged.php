<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminLogged
{
    private $_skipRoute = [
        'login',
        'register',
        'google.login',
        'google.callback'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth = Auth::check();

        if(!$auth)
        {
            if(in_array(request()->route()->getName(), $this->_skipRoute))
            {
                return $next($request);
            }

            return redirect()->route('login');
        }

        if(in_array(request()->route()->getName(), $this->_skipRoute))
        {
            return redirect()->route('admin.app');
        }

        return $next($request);
    }
}
