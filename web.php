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

Route::get('/home', function () {
    return ('Halaman Home');
});

Route::get('/about', function () {
    return ('Halaman About');
});

Route::get('/blog', function () {
    return ('Halaman Blog');
});

Route::get('/', function () {
    return ('Halaman Home');
});

Route::get('/', function () {
    return ('Halaman About');
});

Route::get('/', function () {
    return ('Halaman Utama');
});

Route::get('/belajar', function () {
    echo '<h1>Hello Wordl</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/siswa/smkbpi/rpl', function () {
    echo '<h2 style="text-align: center"><u>Welcome to 11 RPL</u></h2>';
});

Route::get('/siswa/{azizah}', function ($azizah) {
    return "Tampilkan data siswa bernama $azizah";
});

Route::get('/stock_barang/{jenis}/{merek}', function ($jenis, $merek) {
    return "Cek sisa stock untuk $jenis $merek";
});

Route::get('/profile', function () {
    return view('profile');
});