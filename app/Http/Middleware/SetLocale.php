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

    // public function handle($request, Closure $next)
    // {
    //     $locale = $request->segment(1);

    //     $locale = $request->route('locale');
    //     if (in_array($locale, ['en', 'sk'])) {
    //         app()->setLocale($locale);
    //     } else {
    //         return redirect('/sk');
    //     }

    //     return $next($request);
    // }
    // public function handle($request, Closure $next)
    // {
    //     $locale = $request->segment(1);

    //     // Список поддерживаемых локалей
    //     $supportedLocales = ['en', 'sk'];

    //     if (in_array($locale, $supportedLocales)) {
    //         // Устанавливаем локаль, если она поддерживается
    //         app()->setLocale($locale);
    //     } else {
    //         return redirect('/sk');

    //         // Если локаль в URL отсутствует или неподдерживаемая,
    //         // перенаправляем на URL с дефолтной локалью (например, 'sk')
    //         // $defaultLocale = 'sk';
    //         // return redirect()->to($defaultLocale . '/' . $request->path());
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);
        $supportedLocales = ['en', 'sk'];
        $defaultLocale = 'sk';

        // Проверяем, есть ли локаль в URL и поддерживается ли она
        if (!in_array($locale, $supportedLocales)) {
            // Перенаправляем на URL с дефолтной локалью
            // Учитываем, что нам нужно исключить неподдерживаемую локаль из пути
            $pathWithoutLocale = substr($request->path(), strlen($locale));
            return redirect($defaultLocale . '/' . ltrim($pathWithoutLocale, '/'));
        }

        // Если локаль поддерживается, устанавливаем ее
        app()->setLocale($locale);

        return $next($request);
    }


}
