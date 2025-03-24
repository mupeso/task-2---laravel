<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', [HomeController::class,"index"])->name("home");

Route::get('/contact', [ContactController::class,"index"])->name("contact");

Route::get('/history',[HistoryController::class,"index"])->name("history");



Route::get('/majors', [MajorsController::class,"index"])->name("majors");



Route::get('/index', [IndexController::class,"index"])->name("index");

Route::get('/doctor', [DoctorController::class,"index"])->name("doctor");



Route::middleware( 'auth')->group(function () {
   
});

require __DIR__.'/auth.php';

// Route::get('/register', function () {
//     return view('register');
// })->name("register");

// Route::get('/login', function () {
//     return view('login');
// })->name("login");