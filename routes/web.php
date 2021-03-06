<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/domains', function () {
    return view('domains.index');
})->middleware(['auth'])->name('domains');

Route::get('/servers', function () {
    return view('servers.index');
})->middleware(['auth'])->name('servers');

Route::get('/servers/{server:slug}', [\App\Http\Controllers\ServerController::class, 'show'])->middleware('auth')->name('server');

require __DIR__.'/auth.php';
