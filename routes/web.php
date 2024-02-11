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

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'sk'])) {
        session(['locale' => $locale]);
        $url = str_replace('/' . app()->getLocale(), '/' . $locale, url()->previous());
        return redirect($url);
    }
    return back();
});

Route::group(['prefix' => '{locale}'], function() {
    Auth::routes();

    // Home
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

    // Firm
    Route::get('/o-firme', [App\Http\Controllers\FirmController::class, 'index'])->name('firm.index');

    // другие маршруты...
    // Группа маршрутов для администратора
    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {

        // Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    });

});


