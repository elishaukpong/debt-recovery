<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPasswordController;

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

Route::get("/", [AuthController::class, "register"])->name('register');
Route::post("/register", [RegisterController::class, "register"])->name("register");

Route::get("/login", [AuthController::class, "login"])->name('login');
Route::post("/login", [LoginController::class, "login"])->name("login");

Route::get("/forget-password", [AuthController::class, "forgetPassword"])->name("forgetPassword");
Route::get("/reset-password/{email}", [AuthController::class, "resetPassword"])->name("resetPassword");
Route::post('/logout', [AuthController::class, "logout"])->name('logout');

Route::post("/reset-link", [ResetPasswordController::class, 'sendLink'])->name("send_link");
Route::post("/reset-password", [ResetPasswordController::class, 'resetPassword'])->name("reset_password");

Route::middleware("auth:sanctum")->group(function(){
    Route::get("/dashboard", [AuthController::class, "dashboard"])->name('dashboard.index');
});
