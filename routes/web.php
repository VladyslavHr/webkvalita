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

Route::get('/', function (){
    return 'Hello';
});


Route::group(['prefix' => '{locale}'], function() {
    Auth::routes();

    // Home
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

    // Firm
    Route::get('/o-firme', [App\Http\Controllers\FirmController::class, 'index'])->name('firm.index');

    // Note repair
    Route::get('/oprava-notebookov-kosice', [App\Http\Controllers\NoteRepairController::class, 'index'])->name('noteRepair.index');

    // Comp repair
    Route::get('/oprava-pocitacov-kosice', [App\Http\Controllers\CompRepairController::class, 'index'])->name('compRepair.index');

    // Tips&Tricks
    Route::get('/tipy-a-tricky', [App\Http\Controllers\TrickController::class, 'index'])->name('tricks.index');

    // Work
    Route::get('/priebeh-opravy', [App\Http\Controllers\WorkController::class, 'index'])->name('work.index');

    // Contact
    Route::get('/kontakt', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
    Route::get('/objednavka-servisu', [App\Http\Controllers\ContactController::class, 'service'])->name('contact.service');


    // Группа маршрутов для администратора
    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {

        // Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    });

});
