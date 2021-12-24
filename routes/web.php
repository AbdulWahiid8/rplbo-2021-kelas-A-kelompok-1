<?php

use App\Http\Controllers\LegalisirController;
use App\Http\Controllers\LegalisirKeluarController;
use App\Http\Controllers\pengajuanLegesController;
use App\Http\Controllers\pengajuanSuratController;
use App\Http\Controllers\StafLegalisirController;
use App\Http\Controllers\StafSuratController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UserController;
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
        Route::view('/dashboard', 'layouts.dashboard')->name('Dashboard.resepsionis');
        // Surat Masuk
        Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('suratmasuk');
        Route::get('/surat-masuk/detail/{item:id}', [SuratMasukController::class, 'detail'])->name('suratmasuk.detail');
        Route::put('confirm-suratmasuk/{id}', [SuratMasukController::class, 'confirm'])->middleware('resepsionis')->name('suratmasuk.confirm');
        // Legalisir
        Route::get('legalisir-masuk', [LegalisirController::class, 'index'])->name('legalisirmasuk');
        Route::get('legalisir-masuk/detail/{item:id}', [LegalisirController::class, 'detail'])->name('legalisirmasuk.detail');
        Route::put('confirm-legalisirmasuk/{id}', [LegalisirController::class, 'confirm'])->middleware('resepsionis')->name('legalisirmasuk.confirm');
    //-----------------------------------------------------------------------------------------------------//

    // Route Staff
        // Surat Masuk
        Route::get('/suratmasuk', [StafSuratController::class, 'index'])->name('suratmasuk.staf');

        Route::middleware('staf')->group(function(){
            // Create Surat
                Route::get('surat-masuk/tambah', [StafSuratController::class, 'create'])->name('suratmasuk.create');
                Route::post('surat-masuk/create', [StafSuratController::class, 'store'])->name('suratmasuk.store');
            // Edit Surat Masuk
                Route::get('surat-masuk/edit/{id}', [StafSuratController::class, 'edit'])->name('suratmasuk.edit');
                Route::put('update/{id}', [StafSuratController::class, 'update'])->name('suratmasuk.update');
                Route::delete('surat-delete/{id}', [StafSuratController::class, 'destroy'])->name('suratdestroy');

             // Legalisir
                // Create Surat
                Route::get('legalisir-masuk/tambah', [StafLegalisirController::class, 'create'])->name('legalisirmasuk.create');
                Route::post('legalisir-masuk/create', [StafLegalisirController::class, 'store'])->name('legalisirmasuk.store');
                // Edit Surat Masuk
                Route::get('legalisir-masuk/edit/{id}', [StafLegalisirController::class, 'edit'])->name('legalisirmasuk.edit');
                Route::put('legalisir-update/{id}', [StafLegalisirController::class, 'update'])->name('legalisirmasuk.update');
                Route::delete('legalisir-delete/{id}', [StafLegalisirController::class, 'destroy'])->name('legalisirdestroy');
        });
        // Legalisir Masuk
        Route::get('/legalisirmasuk', [StafLegalisirController::class, 'index'])->name('legalisirmasuk.staf');

        // Surat  Keluar
        Route::resource('suratkeluar', SuratKeluarController::class);

        // Legalisir Keluar
        Route::resource('legalisirkeluar', LegalisirKeluarController::class);

    //-----------------------------------------------------------------------------------------------------//

        // Route Kepala Tata Usaha
        Route::middleware('ktu')->group(function(){
            Route::resource('kelolapengguna', UserController::class);
            Route::get('updatepassword/{id}', [UpdatePasswordController::class, 'edit'])->name('updatepassword.edit');
            Route::put('updatepassword/{id}', [UpdatePasswordController::class, 'update'])->name('updatepassword.update');
        });


    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
