<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AuthController::class, 'signInPage'])->name("sign_in_page");
Route::get('/signup', [AuthController::class, 'signUpPage'])->name("sign_up_page");
Route::post("/signingUp", [AuthController::class, "signUp"])->name("signup");
Route::post("/signingIn", [AuthController::class, "signIn"])->name("signin");
Route::get('/dashboard', [UserController::class, 'dashboard'])->name("user_dashboard");
Route::get("/pendingEmails", [UserController::class, "viewPendingEmails"])->name("pending_emails");
Route::get("/pendingCalls", [UserController::class, "viewPendingCalls"])->name("pending_calls");
Route::get("/pendingSMS", [UserController::class, "viewPendingSMSs"])->name("pending_sms");
Route::get("/debtPortal", [UserController::class, "debtPortal"])->name("debt_portal");
Route::get("/debtForm", [UserController::class, "debtForm"])->name("debt_form");
Route::get("/debtHistory", [UserController::class, "debtHistory"])->name("debt_history");
Route::get("/Settings", [UserController::class, "settings"])->name("settings");
