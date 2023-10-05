<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DebtorController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReminderController;
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

Route::get("/register", [RegisterController::class, "register"])->name('register');
Route::post("/register", [RegisterController::class, "registration"])->name("register");

Route::get("/login", [LoginController::class, "login"])->name('login');
Route::post("/login", [LoginController::class, "loggingIn"])->name("login");

Route::post('/logout', [AuthController::class, "logout"])->name('logout');

Route::get("/forget-password", [ResetPasswordController::class, "forgetPassword"])->name("password.forget");
Route::get("/reset-password", [ResetPasswordController::class, "resetPasswordView"])->name("password.reset")->middleware('signed');
Route::post("/reset-link", [ResetPasswordController::class, 'sendLink'])->name("link.send");
Route::post("/reset-password", [ResetPasswordController::class, 'resetPassword'])->name("password.reset");

Route::middleware("auth:sanctum")->group(function(){
    Route::get("/dashboard", [DebtorController::class, "dashboard"])->name('dashboard.index');
    Route::get('/debtor-form', [DebtorController::class, "displayForm"])->name('debtor.form');
    Route::post('/debtor/create', [DebtorController::class, 'create'])->name("debtor.create");
    Route::get('/debtors', [DebtorController::class, 'index'])->name("debtors");
    Route::get('/debtor/edit/{debtorId}', [DebtorController::class, 'editForm'])->name("debtor.editform");
    Route::put('/debtors/edit/{debtorId}', [DebtorController::class, 'edit'])->name("debtor.edit");
    Route::delete('/debtor/delete/{id}', [DebtorController::class, 'delete'])->name('debtor.delete');


    Route::get("/profile", [UserController::class, 'profile'])->name('profile');
    Route::get("/profile/edit", [UserController::class, 'editProfile'])->name('profile.editpage');
    Route::put("/profile/edit", [UserController::class, 'edit'])->name('profile.edit');

    Route::get('/reminder/schedule', [ReminderController::class, 'reminderSchedule'])->name("reminder.schedule");
    Route::get('/reminder/form', [ReminderController::class, 'displayForm'])->name("reminder.form");
    Route::get('/reminder/form', [ReminderController::class, 'displayForm'])->name("remind");
});

