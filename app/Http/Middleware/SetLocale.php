<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
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

    // public function handle($request, Closure $next)
    // {
    //     $locale = $request->segment(1);
    //     $supportedLocales = ['en', 'sk'];
    //     $defaultLocale = 'sk';
    //     // dd('no IF');


    //     // Проверяем, есть ли локаль в URL и поддерживается ли она
    //     if (!in_array($locale, $supportedLocales)) {
    //         if (strlen($locale) == 2) {
    //             $path = str_replace($locale, $defaultLocale, $request->path());
    //             return redirect($path);
    //         }


    //         // Перенаправляем на URL с дефолтной локалью
    //         // Учитываем, что нам нужно исключить неподдерживаемую локаль из пути
    //         $pathWithoutLocale = substr($request->path(), strlen($locale));
    //         // dump(substr($request->path(), strlen($locale)));
    //         // dd($defaultLocale . '/' . ltrim($pathWithoutLocale, '/'));

    //         return redirect($defaultLocale . '/' . ltrim($request->path()));
    //     }

    //     // Если локаль поддерживается, устанавливаем ее
    //     app()->setLocale($locale);
    //     Session::put('locale', $locale);

    //     return $next($request);
    // }
    // public function handle($request, Closure $next)
    // {
    //     // if ($locale = $request->segment(1)) {
    //     //     Session::put('locale', $locale);
    //     // }

    //     // $locale = Session::get('locale', config('app.locale'));
    //     // App::setLocale($locale);

    //     // return $next($request);

    //     $locale = $request->segment(1);

    //     if (in_array($locale, Config::get('localized-routes.locales'))) {
    //         App::setLocale($locale);
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        $locale = session('locale', Config::get('app.locale'));
        App::setLocale($locale);

        return $next($request);
    }

}
