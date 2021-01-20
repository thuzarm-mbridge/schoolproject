<?php

namespace App\Http\Middleware;

use Closure;
use stdClass;
use App\Http\Controllers\Controller;

class ApiSecrete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->secret !== 'thuzar002'){
            $c = new Controller();
            $m = new stdClass;
            $m->message = 'Unauthorized, invalid api_secrete';
            return $c->convertJson('fail', 401, $m);
        }
        return $next($request);
    }
}
