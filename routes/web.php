<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });
Route::get("/",[HomeController::class,'index']);
Route::get("/admindashboard",[HomeController::class,'admindashboard']);


Route::get('/allusers',[AdminController::class,'allusers']);
Route::get('/delete_user/{id}',[AdminController::class,'delete_user']);
Route::get('/alltendance_delete/{id}',[AdminController::class,'alltendance_delete']);

// attendance start
Route::post('/attendance',[AdminController::class,'attendance']);
Route::get('/all_attendance',[AdminController::class,'all_attendance']);
// Route::get('/attendance_report',[AdminController::class,'attendance_report']);
Route::get('/search_report',[AdminController::class,'search_report']);
Route::get('/search_date',[AdminController::class,'date_search']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/search_report', [AdminController::class, 'search_report']);
    Route::get('/allusers', [AdminController::class, 'allusers']);
    Route::get('/search_date', [AdminController::class, 'date_search']);
    Route::get('/admindashboard', [HomeController::class, 'admindashboard']);
    // search_report    allusers admindashboard search_date
});

require __DIR__.'/auth.php';
