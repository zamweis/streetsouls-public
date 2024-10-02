<?php


namespace App\Http\Middleware;

use Closure;

class BasicAuthMiddleware
{
    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle($request, Closure $next) {
        if($request->getUser() != env('BASIC_USER') || $request->getPassword() != env('BASIC_PASSWORD')) {
          $headers = array('WWW-Authenticate' => 'Basic');
          return response('Admin Login', 401, $headers);
        }
        return $next($request);
    }
}
