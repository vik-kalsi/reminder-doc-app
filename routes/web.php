<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return view('welcome');
})->middleware('guest');



#Login page
Route::get('/login', [LoginController::class, 'OpenLoginPage'])
->middleware('guest')
->name('login');