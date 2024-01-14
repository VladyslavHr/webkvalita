<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'sk'])) {
//         session(['locale' => $locale]);
//     }
//     return back();
// });

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'sk'])) {
        session(['locale' => $locale]);
        $url = str_replace('/' . app()->getLocale(), '/' . $locale, url()->previous());
        return redirect($url);
    }
    return back();
});

Auth::routes();

Route::group(['prefix' => '{locale}'], function() {
    // Ваши обычные маршруты
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

    // другие маршруты...
});
