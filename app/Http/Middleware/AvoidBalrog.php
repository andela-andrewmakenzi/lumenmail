<?php

namespace app\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class stopBalrogMiddleware{
    public function handle(Request $request, Closure $next){
        if(preg_match('/balrog$/i', $request.path())){
            return (new Reponse('You shall not pass', 403))->header('Content-Type','Text/pain');
        }
        return $next($request);
    }
}
