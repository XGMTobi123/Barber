<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SubscriberController;
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
Auth::routes();

Route::get('/a', function () {
    return view('welcome');
});
Route::get('/db', function () {
    return view('db');
});

Route::post('/mail', [SubscriberController::class, 'subscribe']);

Route::any("/", [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//Route::any("/mail", [\App\Http\Controllers\SendMailController::class, 'mail'])->name('mail');
