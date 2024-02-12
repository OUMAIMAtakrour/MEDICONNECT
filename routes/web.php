<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;

use App\Http\Middleware\Admin;
use App\Http\Middleware\Doctor;
use App\Http\Middleware\Patient;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleBased;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/patient', [PatientController::class, 'index'])->name('home')->middleware('patient');
Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor')->middleware('doctor');
Route::get('/admin', 'AdminController@index')->name('dashboard')->middleware('admin');

// Route::get('/doctor', [DoctorController::class, 'index'])->name('docDash');
// Route::get('/patient', [PatientController::class, 'index'])->name('home');
// Route::get('/admin', [DoctorController::class, 'index'])->name('dashboard');
// Route::get('/doctor', [DoctorController::class, 'index'])->name('docDash')->middleware([Doctor::class]);
// Route::get('/patient', [PatientController::class, 'index'])->name('home')->middleware([Patient::class]);
// Route::get('/admin', [AdminController::class, 'index'])->name('dashboard')->middleware([Admin::class]);





require __DIR__ . '/auth.php';
