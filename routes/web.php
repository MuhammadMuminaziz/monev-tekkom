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

    Route::get('/cities/edit', [CityController::class, 'editCity']);
    Route::resource('cities', CityController::class);

    Route::resource('/school', SchoolController::class);

    Route::get('/district', [DistrictController::class, 'index'])->name('district.index');
    Route::get('/district/edit', [DistrictController::class, 'edit']);
    Route::post('/district', [DistrictController::class, 'store'])->name('district.store');
    Route::put('/district{district}/update', [DistrictController::class, 'update'])->name('district.update');
    Route::delete('/district/{district}/destroy', [DistrictController::class, 'destroy'])->name('district.destroy');

    Route::get('/school', [SchoolUserController::class, 'index'])->name('school.index');
    Route::get('/school/{school}', [SchoolUserController::class, 'show'])->name('school.show');

    Route::get('/periode', [PeriodeController::class, 'index'])->name('periode.index');
    Route::post('/periodes', [PeriodeController::class, 'update'])->name('periode.update');
});

Route::middleware(['auth', 'operator'])->group(function () {
    Route::resource('/schools', SchoolController::class);
    Route::resource('/teachers', TeacherController::class);
});

Route::middleware(['auth', 'verifikator'])->group(function () {
    Route::get('/schools-verify', [VerifikatorController::class, 'school'])->name('verifikator.schools');
    Route::get('/schools-verify/{school}/ferify', [VerifikatorController::class, 'schoolVerify'])->name('verifikator.schools.verify');
    Route::get('/schools-verify/{school}/reject', [VerifikatorController::class, 'schoolReject'])->name('verifikator.schools.reject');
    Route::get('/schools-verify/{school}', [VerifikatorController::class, 'show'])->name('verifikator.show');
    Route::get('/teachers-verify', [VerifikatorController::class, 'teacher'])->name('verifikator.teachers');
});

Route::middleware(['auth', 'owner'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/reporting', [ReportingController::class, 'index'])->name('reporting.index');
    Route::get('/reporting/{city}', [ReportingController::class, 'district'])->name('reporting.district');
    Route::get('/reporting/{city}/{district}', [ReportingController::class, 'school'])->name('reporting.school');
});


require __DIR__ . '/auth.php';
