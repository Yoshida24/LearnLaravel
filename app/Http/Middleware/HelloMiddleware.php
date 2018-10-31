<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
          ['name'=>'taro1', 'mail'=>'taro1yamada@mail'],
          ['name'=>'taro2', 'mail'=>'taro2yamada@mail']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}