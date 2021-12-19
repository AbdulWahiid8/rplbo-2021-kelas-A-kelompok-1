<?php

use App\Http\Controllers\LegalisirController;
use App\Http\Controllers\LegalisirKeluarController;
use App\Http\Controllers\pengajuanLegesController;
use App\Http\Controllers\pengajuanSuratController;
use App\Http\Controllers\StafSuratController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use Illuminate\Support\Facades\{Route, Auth};

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
    // Route Utama
    Route::get('/', function () {
        return view('landing');
    });

    // Route Pengguna Umum
        Route::view('/Dashboard', 'pengguna.home')->name('Dashboard');
        Route::get('/pengajuan-surat', [pengajuanSuratController::class, 'index'])->name('pengajuanSurat');
        Route::get('/pengajuan-legalisir', [pengajuanLegesController::class, 'index'])->name('pengajuanLegalisir');
        Route::view('/pengumuman', 'pengguna.pengumuman')->name('pengumuman');
        // Route Create surat masuk
        Route::post('/pengajuan-surat', [pengajuanSuratController::class, 'create'])->name('surat.create');
        // Route Create Legalisir Masuk
        Route::post('/pengajuan-legalisir', [pengajuanLegesController::class, 'create'])->name('legalisir.create');

    //-----------------------------------------------------------------------------------------------------//

    // Route Resepsionis
        Route::view('/Dashboard-resepsionis', 'layouts.dashboard')->name('Dashboard.resepsionis');
        // Surat Masuk
        Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('suratmasuk');
        Route::get('/surat-masuk/detail/{item:id}', [SuratMasukController::class, 'detail'])->name('suratmasuk.detail');
        Route::post('confirm', [SuratMasukController::class, 'confirm'])->name('confirm');
        // Legalisir
        Route::get('legalisir-masuk', [LegalisirController::class, 'index'])->name('legalisirmasuk');
        Route::get('legalisir-masuk/detail/{item:id}', [LegalisirController::class, 'detail'])->name('legalisirmasuk.detail');

    //-----------------------------------------------------------------------------------------------------//

    // Route Staff
        // Surat Masuk
        Route::get('/surat-masuk-staf', [StafSuratController::class, 'index'])->name('suratmasuk.staf');
        // Edit Surat Masuk
        Route::get('surat-masuk/edit/{id}', [StafSuratController::class, 'edit'])->name('suratmasuk.edit');
        Route::post('update/{id}', [StafSuratController::class, 'update'])->name('suratmasuk.update');
        Route::delete('delete/{id}', [StafSuratController::class, 'destroy'])->name('destroy');


        // Surat  Keluar
        Route::get('surat-keluar', [SuratKeluarController::class, 'index'])->name('suratkeluar');

        // Legalisir Keluar
        Route::get('legalisir-keluar', [LegalisirKeluarController::class, 'index'])->name('legalisirkeluar');








    //Route::view('master/home', 'pengguna.home')->name('master.home');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
