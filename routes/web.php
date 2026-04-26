<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteAccountController;



Route::get('/', function () {
    return view('welcome');
})->middleware('guest');



#Login page
Route::get('/login', [LoginController::class, 'OpenLoginPage'])
->middleware('guest')
->name('login');

Route::post('/login', [LoginController::class, 'LoginUser']);


#Log out user
Route::post('/logout', [LogOutController::class, "LogOutUser"])
->name('logout_user')
->middleware('auth');


#Register page
Route::get('/register', [RegisterController::class, "OpenRegistrationPage"])
->middleware('guest');

Route::post('/register', [RegisterController::class, "RegisterUser"]);


#Dashboard page
Route::get('/dashboard', [DashboardController::class, "OpenDashboard"])
->middleware('auth');


#Delete user account
Route::get('/deleteaccount', [DeleteAccountController::class, "OpenDeleteAccountPage"])
->middleware('auth');


Route::delete('/deleteaccount/{id}', [DeleteAccountController::class, "DeleteAccount"])->name('account.delete')
->middleware('auth');