<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ControllerWebAdmin;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\ProfileWebController;
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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/webadmin',[ControllerWebAdmin::class, 'WebAdmin'])->name('webadmin');


Route::get('/profileweb',[ProfileWebController::class, 'WebProfile'])->name('profileweb');


Route::get('/dataadmin',[DataAdminController::class, 'DataAdmin'])->name('dataadmin');



