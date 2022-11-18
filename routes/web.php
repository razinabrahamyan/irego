<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Questions\QuestionsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect('index');
// });

$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);
    }
});

Route::middleware('auth')->group(function () {

    // Account pages
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

    // Questions pages
    Route::prefix('questions')->group(function () {
        Route::get('/', [QuestionsController::class, 'index'])->name('questions.index');
        Route::get('/create', [QuestionsController::class, 'create'])->name('questions.create');
        Route::post('/store', [QuestionsController::class, 'store'])->name('questions.store');
        Route::get('/edit/{question}', [QuestionsController::class, 'edit'])->name('questions.edit');
        Route::post('/update/{question}', [QuestionsController::class, 'update'])->name('questions.update');
        Route::get('/destroy/{question}', [QuestionsController::class, 'destroy'])->name('questions.destroy');
    });
});

Route::resource('users', UsersController::class);

/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__.'/auth.php';
