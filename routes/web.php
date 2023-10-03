<?php

use App\Http\Controllers\SwitchLanguageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/change-locale/{locale}', [SwitchLanguageController::class, 'changeLocale'])->name('change-locale')->middleware('setLocale');

Route::get('/home',function (){
    return view('home');
});
