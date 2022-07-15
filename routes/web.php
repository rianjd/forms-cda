<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailerController;
use App\Http\Controllers\FormController;


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

Route::get('/h', function () {
    return view('welcome');

});


Route::get('/', function () {
    return view('home');

});

Route::get('/core', function () {
    return view('acessorios');

});
Route::get('/chat', function () {
    return view('chat');

});
Route::get('/dj', function () {
    return view('dj');

});
Route::get('/email', function () {
    return view('email');

});

Route::post('/form', [FormController::class,'store'])->name('form.store');






