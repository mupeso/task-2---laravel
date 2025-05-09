<?php

use App\Http\Controllers\AddDoctorController;
use App\Http\Controllers\AddMajorController;
use App\Http\Controllers\AddServicesController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use Illuminate\Auth\Events\Authenticated;
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

Route::post("/logout",[AuthenticatedSessionController::class,"destroy"])->name("logout");

Route::get('/majors', [MajorsController::class,"index"])->name("majors");
Route::get("/addmajor",[AddMajorController::class,"index"])->name(name: "add.major");
Route::post("/addmajor/create",[AddMajorController::class,"store"])->name(name: "add.major.add");





Route::get('/index', [IndexController::class,"index"])->name("index");

Route::get('/doctor', [DoctorController::class,"index"])->name("doctor");
Route::post('/doctor/reservation', [DoctorController::class,"store"])->name("doctor.reservation");

Route::get('/Services', [ServicesController::class,"index"])->name("Services");
Route::get("/addServices",[AddServicesController::class,"index"])->name(name: "add.Services");
Route::post("/addServices/add",[AddServicesController::class,"store"])->name(name: "add.Services.add");





Route::get("/adddoctor",[AddDoctorController::class,"index"])->name(name: "add.doctor");
Route::post("/adddoctor/add",[AddDoctorController::class,"store"])->name(name: "add.doctor.add");



Route::middleware( 'auth')->group(function () {
   
});

require __DIR__.'/auth.php';

// Route::get('/register', function () {
//     return view('register');
// })->name("register");

// Route::get('/login', function () {
//     return view('login');
// })->name("login");