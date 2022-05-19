<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\registController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\travelController;
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

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

// Route::get('/input-dashboard', function () {
//     return view('pages.input-dashboard');
// });

// Route::get('/input-data', function () {
//     return view('pages.input-data');
// });
Route::get('/dashboard', [travelController::class, 'dashboard'])->middleware('auth');
Route::get('/catatan-perjalanan', [travelController::class, 'catatanPerjalanan'])->middleware('auth');
Route::get('/input-dashboard', [travelController::class, 'inputDataTravel'])->middleware('auth');
Route::post('/simpanTravel', [travelController::class, 'simpanTravel']);

Route::get('/ubah/{id}', [travelController::class, 'ubahPerjalanan'])->name('ubahPerjalanan');
Route::post('/update', [travelController::class, 'updatePerjalanan'])->name('updatePerjalanan');
Route::get('hapus/{id}', [travelController::class, 'hapusPerjalanan'])->name('hapusPerjalanan')->middleware('auth');

Route::get('/', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::any('/loginUser', [loginController::class, 'authenticate']);

Route::get('/logout', [loginController::class, 'logout'])->middleware('auth');

Route::get('/register', [registController::class, 'regist'])->middleware('guest');
Route::post('registUser', [registController::class, 'registUser']);
