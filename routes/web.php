<?php

use App\Http\Controllers\LandingpageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingpageController::class, 'index'])->name('landing-page');
Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
Route::get('/visimisi', [VisimisiController::class, 'index'])->name('visimisi');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');
Route::get('/sdm', [SdmController::class, 'index'])->name('sdm');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');

Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran-store');

Route::get('/pengumuman/{slug}', [PengumumanController::class, 'show'])->name('pengumuman.show');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');