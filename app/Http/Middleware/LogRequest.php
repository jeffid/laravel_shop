<?php

namespace App\Http\Middleware;

use Closure;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $params = json_encode($request->all(), JSON_UNESCAPED_UNICODE);
        $info = <<<T
{$request->getRealMethod()} {$request->fullUrl()}
params: {$params}
T;
        \Log::info($info);
        
        return $next($request);
    }
}
