<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Core\CoreController;
use App\Http\Controllers\Hcms\PersonalController;
use App\Http\Controllers\Hcms\MasterController;
use App\Http\Controllers\Usermgmt\AplikasiController;

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

Route::get('/', function () {
    return view('core.login');
});

Route::get('/login', function () {
    return view('core.index');
});


// -- CORE --
Route::get('dashboard', [CoreController::class, 'dashboard']);
Route::get('profile', [CoreController::class, 'profile']);

// -- PERSONAL --
Route::get('attandance', [PersonalController::class, 'attandance']);

// -- MASTER DATA --
Route::get('department', [MasterController::class, 'department']);
Route::get('department_add', [MasterController::class, 'department_add']);

Route::get('divisi', [MasterController::class, 'divisi']);
Route::get('jabatan', [MasterController::class, 'jabatan']);

//-- USERMANAGEMENT ------------
Route::get('aplikasi', [AplikasiController::class, 'index']);