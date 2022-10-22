<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ControllerEmployee;

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
    return view('login.index');
});

// controller employee
Route::controller(ControllerEmployee::class)->group(function () {
    Route::post('add_employe', 'store');
    Route::get('durasiLembur', 'durasiLembur');
    Route::get('bonusLembur', 'bonusLembur');
    Route::post('add_durasiLembur', 'add_durasiLembur');
    Route::post('add_jam', 'add_jam');
    Route::get('dataPegawai', 'dataPegawai');
    Route::get('editPegawai/{id}', 'edit');
    Route::post('editDataPegawai/{id}', 'update');
    Route::post('employee/destroy/{id}', 'destroy');
    Route::get('detailPegawai/{id}', 'show');
});

Route::resource('employee', ControllerEmployee::class);

// controller login
Route::controller(LoginController::class)->group(function () {
    Route::post('post_login', 'store');
    Route::post('logout', 'logout');
});

Route::resource('user', UserController::class);
