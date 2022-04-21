<?php

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


Route::get('/', [MasterController::class, 'userUI'])->name('user-home');

// route siswa
Route::get('/home',[SiswaController::class, 'index'])->name('dasboar-siswa')->middleware('auth');
Route::post('/home', [SiswaController::class,'tambahs'])->name('tambah-siswa');
Route::get('/edit/{id}', [SiswaController::class, 'edits'])->name('edit-siswa')->middleware('auth');
Route::post('/update/{id}', [SiswaController::class, 'updates'])->name('update-siswa');
Route::delete('/detele/{id}', [SiswaController::class, 'deletes'])->name('hapus-siswa');
Route::get('/detailsiswa/{id}', [SiswaController::class, 'detailsiswa'])->name('detail-siswa');
//absen siswa

//route guru
Route::get('/homeguru', [GuruController::class, 'indexguru'])->name('index-guru')->middleware('auth');
Route::get('/tambahguru', [GuruController::class, 'tambahguru'])->name('tambah-guru')->middleware('auth');
Route::post('tambahguru', [GuruController::class, 'tambahdata'])->name('tambah-dataguru');
Route::get('/editguru/{id}',[GuruController::class, 'editguru'])->name('edit-guru')->middleware('auth');
Route::put('/editguru/{id}', [GuruController::class, 'updateguru'])->name('update-guru');
Route::delete('/delete/{id}', [GuruController::class, 'deleteguru'])->name('delete-guru');
// absen guru
Route::get('/homeabsen', [AbsenGuruController::class, 'tampilabsenguru'])->name('tampil-absen-guru')->middleware('auth');
Route::get('/tambahabsen', [AbsenGuruController::class, 'tambahabsen'])->name('tambah-absen')->middleware('auth');
Route::post('/tambahabsen', [AbsenGuruController::class, 'tambahdatag'])->name('data-absen');
Route::get('/editabsen/{id}', [AbsenGuruController::class, 'editabsen'])->name('edit-absen')->middleware('auth');
Route::put('/editabsen/{id}', [AbsenGuruController::class, 'updateabsen'])->name('update-absen');
Route::delete('/deleteabsen/{id}', [AbsenGuruController::class, 'deleteabsen'])->name('delete-absen');

//route mapel
Route::get('/homemapel', [MapelController::class, 'indexmapel'])->name('index-mapel')->middleware('auth');
Route::get('/tambahmapel', [MapelController::class, 'tambahmapel'])->name('tambah-mapel')->middleware('auth');
Route::post('/tambahmapel', [MapelController::class, 'tambahdatamapel'])->name('data-mapel');
Route::get('/editmapel/{id}', [MapelController::class, 'editmapel'])->name('edit-mapel')->middleware('auth');
Route::put('/editmapel/{id}', [MapelController::class, 'updatemapel'])->name('update-mapel');
Route::delete('hapusmapel/{id}', [MapelController::class, 'hapusmapel'])->name('hapus-mapel');

// route untuk dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboardisi', [DashboardController::class, 'isi'])->name('dashboard')->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin'])->name('post-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// route absen siswa
Route::get('/absensiswa', [AbsenSiswaContorller::class, 'homeabsen'])->name('home-AB-siswa');
Route::get('/tambahsiswa', [AbsenSiswaContorller::class, 'tambahabsensiswa'])->name('tambah-ab-siswa');
Route::post('/dataabsiswa', [AbsenSiswaContorller::class, 'dataabsiswa'])->name('data-absen-siswa');
Route::get('/editabsiswa/{id}', [AbsenSiswaContorller::class, 'editabsiswa'])->name('edit-absen-siswa');
Route::put('/editabsiswa/{id}', [AbsenSiswaContorller::class, 'updateabsiswa'])->name('update-ab-siswa');
Route::delete('/deleteabsiswa/{id}', [AbsenSiswaContorller::class, 'deleteabsiswa'])->name('delete-ab-siswa');


// Route::middleware(['web'])->group(function () {
//     //Your routes here
// });
