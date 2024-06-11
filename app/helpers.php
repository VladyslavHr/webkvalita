<?php
use Illuminate\Support\Facades\App;

// if (!function_exists('localized_route')) {
//     function localized_route($name, $parameters = [])
//     {
//         $route = trans("routes.$name");
//         return route($name, $parameters);
//     }
// }
// if (!function_exists('localized_route')) {
//     function localized_route($name, $parameters = [], $locale = null)
//     {
//         $locale = $locale ?? app()->getLocale();
//         $routePath = trans("routes.$name", [], $locale);
//         return url($routePath, $parameters);
//     }
// }
if (!function_exists('localized_route')) {
    function localized_route($name, $parameters = [], $locale = null)
    {
        // Используем текущую локаль, если она не передана
        $locale = $locale ?? app()->getLocale();
        // Формируем имя маршрута с учетом локали
        $routeName = $name . '.' . $locale;

        \Log::info('Localized route', [
            'locale' => $locale,
            'routeName' => $routeName,
            'parameters' => $parameters,
        ]);

        // Проверяем, зарегистрирован ли маршрут
        if (Route::has($routeName)) {
            return route($routeName, $parameters);
        }

        // Если маршрут не найден, возвращаем URL с базовым именем маршрута
        return url($name, $parameters);
    }
}
// function locale_route($name, $parameters = []) {
//     if (!is_array($parameters)) {
//         $parameters = [$parameters];
//     }
//     return route($name, array_merge(['locale' => app()->getLocale()], $parameters));
// }


function locale_route($name, $parameters = [], $absolute = true) {
    $locale = app()->getLocale();
    $route = trans("routes.$name");

    return url($route, $parameters, $absolute);
}
