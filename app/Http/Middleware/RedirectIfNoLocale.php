<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNoLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Установите вашу дефолтную локаль здесь
        //  $defaultLocale = 'sk';
        // dd('No if');
         // Проверяем, содержит ли URL локаль
        //  if (!in_array($request->segment(1), ['en', 'sk'])) {
        //      // Перенаправляем на URL с дефолтной локалью

        //      return redirect('/' . $defaultLocale);

        //  }

        // return $next($request);
    }
}
