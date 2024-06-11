<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FirmController;
use App\Http\Controllers\NoteRepairController;
use App\Http\Controllers\CompRepairController;
use App\Http\Controllers\TrickController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\LanguageController;
// use CodeZero\LocalizedRoutes\LocalizedRoutes;

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
// Маршрут для изменения языка
Route::get('/change-language/{locale}', [LanguageController::class, 'changeLanguage'])->name('change.language');

// Маршруты для английского языка
Route::middleware('locale')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.en');
    Route::get('about-company', [FirmController::class, 'index'])->name('firm.en');
    Route::get('laptop-repair', [NoteRepairController::class, 'index'])->name('noteRepair.en');
    Route::get('computer-repair', [CompRepairController::class, 'index'])->name('compRepair.en');
    Route::get('tips-and-tricks', [TrickController::class, 'index'])->name('tricks.en');
    Route::get('work-progress', [WorkController::class, 'index'])->name('work.en');
    Route::get('contact', [ContactController::class, 'index'])->name('contact.en');
    Route::get('service-order', [ContactController::class, 'service'])->name('service.en');
});

// Маршруты для словацкого языка
Route::middleware('locale')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.sk');
    Route::get('o-firme', [FirmController::class, 'index'])->name('firm.sk');
    Route::get('oprava-notebookov-kosice', [NoteRepairController::class, 'index'])->name('noteRepair.sk');
    Route::get('oprava-pocitacov-kosice', [CompRepairController::class, 'index'])->name('compRepair.sk');
    Route::get('tipy-a-triky', [TrickController::class, 'index'])->name('tricks.sk');
    Route::get('priebeh-opravy', [WorkController::class, 'index'])->name('work.sk');
    Route::get('kontakt', [ContactController::class, 'index'])->name('contact.sk');
    Route::get('objednavka-servisu', [ContactController::class, 'service'])->name('service.sk');
});
// Маршрут для изменения языка
Route::get('/change-language/{locale}', [LanguageController::class, 'changeLanguage'])->name('change.language');

// // Группа маршрутов с учетом локализации
// Route::middleware('locale')->group(function () {
//     Route::get(trans('routes.home'), [HomeController::class, 'index'])->name('home');
//     Route::get(trans('routes.firm'), [FirmController::class, 'index'])->name('firm');
//     Route::get(trans('routes.noteRepair'), [NoteRepairController::class, 'index'])->name('noteRepair');
//     Route::get(trans('routes.compRepair'), [CompRepairController::class, 'index'])->name('compRepair');
//     Route::get(trans('routes.tricks'), [TrickController::class, 'index'])->name('tricks');
//     Route::get(trans('routes.work'), [WorkController::class, 'index'])->name('work');
//     Route::get(trans('routes.contact'), [ContactController::class, 'index'])->name('contact');
//     Route::get(trans('routes.service'), [ContactController::class, 'service'])->name('service');
// });

    // Группа маршрутов для администратора
    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
        // Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    });
