<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        $locale = $request->route('locale');
        if (in_array($locale, ['en', 'sk'])) {
            app()->setLocale($locale);
        } else {
            return redirect('/sk');
        }

        return $next($request);
    }

}
