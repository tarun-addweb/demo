<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;

use App\Http\Controllers\datecontroller;

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

Route::get('/form', [formcontroller::class, 'form'])->name('form');
Route::post('/form', [formcontroller::class, 'formsave']);
Route::post('/formdemo', [formcontroller::class, 'formsave']);

Route::view('/sc', 'splitscreen');


Route::get('/my-captcha', [formcontroller::class, 'mycaptcha'])->name('mycaptcha');
Route::post('/my-captcha', [formcontroller::class, 'mycaptchapost'])->name('mycaptchapost');
Route::get('/refresh_captcha', [formcontroller::class, 'refreshcaptcha'])->name('refresh_captcha');


Route::get('/date' , [datecontroller::class, 'date'])->name('date');
Route::post('/date' , [datecontroller::class, 'dates']);