<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswacontroller;

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
    return view('welcome');
});

Route::get('/siswa',[siswacontroller::class,'index']);
Route::get('/siswa/tambah',[siswacontroller::class,'tambah']);
Route::get('/siswa/edit/{id}',[siswacontroller::class,'edit']);

Route::post('/siswa/tambah/data',[siswacontroller::class,'tambahdata']);
Route::put('/siswa/edit/data/{id}',[siswacontroller::class,'editdata']);
Route::get('/siswa/hapus/data/{id}',[siswacontroller::class,'hapusdata']);

Route::get('/guru', function () {
    return view('daftarguru');
});

Route::get('/kelas', function () {
    return view('daftarkelas');
});

Route::get('/mapel', function () {
    return view('daftarmapel');
});
