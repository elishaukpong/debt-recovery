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

Route::get("/", [RegisterController::class, "register"])->name('register');
Route::post("/register", [RegisterController::class, "registration"])->name("register");

Route::get("/login", [LoginController::class, "login"])->name('login');
Route::post("/login", [LoginController::class, "loggingIn"])->name("login");

Route::post('/logout', [AuthController::class, "logout"])->name('logout');

Route::get("/forget-password", [ResetPasswordController::class, "forgetPassword"])->name("password.forget");
Route::get("/reset-password", [ResetPasswordController::class, "resetPasswordView"])->name("password.reset")->middleware('signed');
Route::post("/reset-link", [ResetPasswordController::class, 'sendLink'])->name("link.send");
Route::post("/reset-password", [ResetPasswordController::class, 'resetPassword'])->name("password.reset");

Route::middleware("auth:sanctum")->group(function(){
    Route::get("/dashboard", [AuthController::class, "dashboard"])->name('dashboard.index');
});
