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

    // Firm
    Route::get('/oprava-notebookov-kosice', [App\Http\Controllers\NoteRepairController::class, 'index'])->name('noteRepair.index');

    // Firm
    Route::get('/oprava-pocitacov-kosice', [App\Http\Controllers\CompRepairController::class, 'index'])->name('compRepair.index');

    // Contact
    Route::get('/kontakt', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');

    // Группа маршрутов для администратора
    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {

        // Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    });

});


