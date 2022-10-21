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
    Route::get('/teacher', [SchoolUserController::class, 'teacher'])->name('teacher.index');
    Route::get('/teacher/{teacher}', [SchoolUserController::class, 'teacherShow'])->name('teacher.show');

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
    Route::get('/schools-verify/{school}/cansel', [VerifikatorController::class, 'schoolCansel'])->name('verifikator.schools.cansel');
    Route::get('/schools-verify/{school}', [VerifikatorController::class, 'show'])->name('verifikator.show');
    Route::get('/teachers-verify', [VerifikatorController::class, 'teacher'])->name('verifikator.teachers');
    Route::get('/teachers-verify/ferify', [VerifikatorController::class, 'teacherVerify'])->name('verifikator.teacher.verify');
    Route::get('/teachers-verify/reject', [VerifikatorController::class, 'teacherReject'])->name('verifikator.teacher.reject');
    Route::get('/teachers-verify/{teacher}/cansel', [VerifikatorController::class, 'teacherCansel'])->name('verifikator.teacher.cansel');
    Route::get('/teachers-verify/{teacher}', [VerifikatorController::class, 'showTeacher'])->name('verifikator.teacher.show');
});

Route::middleware(['auth', 'owner'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/reporting', [ReportingController::class, 'index'])->name('reporting.index');
    Route::get('/reporting/{school}', [ReportingController::class, 'schoolShow'])->name('reporting.school.show');
    Route::get('/reporting/download/data-sekolah/{school}', [ReportingController::class, 'schoolPrint'])->name('reporting.school.print');
    Route::get('/reporting/download/semua-data-sekolah/{id}', [ReportingController::class, 'schoolsPrint'])->name('reporting.schools.print');
    Route::get('/reporting/{school}/teacher', [ReportingController::class, 'teacher'])->name('reporting.school.teacher');
    Route::get('/reporting/download/data-guru/{teacher}', [ReportingController::class, 'teacherPrint'])->name('reporting.teacher.print');
    Route::get('/reporting/{school}/{teacher}', [ReportingController::class, 'teacherShow'])->name('reporting.school.teacher.show');

    // filter
    Route::get('/filter-by-district', [ReportingController::class, 'filterDistrict']);
});


require __DIR__ . '/auth.php';
