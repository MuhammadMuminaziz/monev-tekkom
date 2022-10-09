<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ReportingController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifikatorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware('guest');


Route::middleware(['auth', 'super_admin'])->group(function () {
    Route::resource('users', UserController::class);

    Route::resource('cities', CityController::class);

    Route::get('/district', [DistrictController::class, 'index'])->name('district.index');

    Route::get('/school', SchoolUserController::class)->name('school.index');

    Route::get('/periode', [PeriodeController::class, 'index'])->name('periode.index');
    Route::post('/periodes', [PeriodeController::class, 'update'])->name('periode.update');
});

Route::middleware(['auth', 'operator'])->group(function () {
    Route::resource('/schools', SchoolController::class);
    Route::resource('/teachers', TeacherController::class);
});

Route::middleware(['auth', 'verifikator'])->group(function () {
    Route::get('/schools-verify', [VerifikatorController::class, 'school'])->name('verifikator.schools');
    Route::get('/teachers-verify', [VerifikatorController::class, 'teacher'])->name('verifikator.teachers');
});

Route::middleware(['auth', 'owner'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/reporting', ReportingController::class)->name('reporting.index');
});


require __DIR__ . '/auth.php';
