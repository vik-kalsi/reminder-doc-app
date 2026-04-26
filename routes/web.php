<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



Route::get('/', function () {
    return view('welcome');
})->middleware('guest');



#Login page
Route::get('/login', [LoginController::class, 'OpenLoginPage'])
->middleware('guest')
->name('login');


#Register page
Route::get('/register', [RegisterController::class, "OpenRegistrationPage"])
->middleware('guest');

Route::post('/register', [RegisterController::class, "RegisterUser"]);