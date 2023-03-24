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

// To do
// 2. Authentication of User and linking to DashBoard
// 3. Rearranging of Dashboard
