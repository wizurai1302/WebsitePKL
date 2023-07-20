<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerusahaanJSONController;
use App\Http\Controllers\ChartJSONController;
use App\Http\Controllers\SiswaJSONController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => ['auth', 'adminMiddleware:0']], function(){

    Route::get('/card', [PerusahaanJSONController::class, 'card'])->name('card');
    Route::get('/dataperusahaan', [PerusahaanController::class, 'showperusahaan'])->name('admin.dataperusahaan');

    // chartController
    Route::get('/homeadmin', [ChartJSONController::class, 'getCityCounts']);
    Route::get('/admin',[ChartJSONController::class, 'showChart'])->name('admin.show');

    // Edit
    Route::get('/siswa/{id}/edit', [SiswaJSONController::class, 'edit'])->name('edit-siswa');
    Route::post('/siswa/update/{id}', [SiswaJSONController::class, 'update'])->name('update-siswa');

    Route::get('/edit/{id}', [PerusahaanJSONController::class, 'edit'])->name('edit-perusahaan');
    Route::post('/update/{id}', [PerusahaanJSONController::class, 'update'])->name('update-perusahaan');
    Route::get('/datasiswa', [SiswaJSONController::class, 'showsiswa'])->name('admin.datasiswa');
 

    // delete
    Route::delete('/siswa/{id}', [SiswaJSONController::class, 'destroy'])->name('admin.data');
    Route::delete('/perusahaan/{id}', [PerusahaanJSONController::class, 'destroy'])->name('admin-dataperusahaan');

    // Export PDF
    Route::get('/exportpdf', [SiswaJSONController::class, 'exportpdf'])->name('exportpdf');

});



Auth::routes();
Route::group(['middleware' => ['auth', 'adminMiddleware:0,1,2,3']], function(){

Route::get('/home', [PerusahaanJSONController::class, 'index'])->name('home');
// SiswaController
Route::get('/tambahdata', [App\Http\Controllers\SiswaJSONController::class, 'tambahdata'])->name('tambahdata');
Route::post('/store', [SiswaJSONController::class, 'store'])->name('store');


// PerusahaanController
Route::post('/perusahaan', [PerusahaanJSONController::class, 'store'])->name('perusahaan');
Route::get('/show/{id}', [PerusahaanJSONController::class, 'show'])->name('show');



// Lokasi
Route::get('/jogja', [CategoryJSONController::class, 'index'])->name('prrr.jogja');
Route::get('/jabodetabek', [CategoryJSONController::class, 'jabodetabek'])->name('jabodetabek');
Route::get('/batam', [CategoryJSONController::class, 'batam'])->name('batam');
Route::get('/pekanbaru', [CategoryJSONController::class, 'pekanbaru'])->name('pekanbaru');
Route::get('/padang', [CategoryJSONController::class, 'padang'])->name('padang');


// jurusan

Route::get('/rpl', [CategoryJSONController::class, 'rpl'])->name('rpl');
Route::get('/mm', [CategoryJSONController::class, 'mm'])->name('mm');
Route::get('/tkj', [CategoryJSONController::class, 'tkj'])->name('tkj');
Route::get('/bc', [CategoryJSONController::class, 'bc'])->name('bc');

});
