<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\upamaController;
use App\Http\Controllers\alldoneController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\amarecapController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\settingCongroller;
use App\Http\Controllers\messageController;
use Illuminate\Support\Facades\View;
use App\Models\setting;
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

Route::get('/', [
    App\Http\Controllers\frontendController::class,
    'index',
])->name('mainpage');
Route::get('/service', function () {
    return view('frontend.pages.services');
});
Route::get('/dashboard', function () {
    return view('backend.layouts.index');
})
    ->middleware(['auth'])
    ->name('dashboard');
Route::get('/recap', [frontendController::class, 'recap'])->name('recap');
Route::get('/recap/view/{slug}', [frontendController::class, 'show'])->name(
    'recap_show'
);
Route::get('/ama', [frontendController::class, 'ama'])->name('ama');
Route::get('/order', [frontendController::class, 'create'])->name('order');
Route::post('/order', [frontendController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::resource('upama', upamaController::class);
        Route::resource('alldone', alldoneController::class);
        Route::resource('amarecap', amarecapController::class);
        Route::resource('team', teamController::class);
        Route::resource('setting', settingCongroller::class);
        Route::resource('message', messageController::class);
    });
});
require __DIR__ . '/auth.php';
