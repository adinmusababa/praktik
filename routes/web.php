<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\produkduaController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::resource('produk', ProdukController::class);
Route::resource('karyawan', KaryawanController::class);

// Gunakan controller bernama produkduaController dan jalankan method index.”
Route::get('produkdua', [produkduaController::class, 'index']);
Route::resource('/karyawan', KaryawanController::class);

// Route::get('/barang', [ProdukController3::class, 'index']);

// // router untuk menampilkan menggunakan fungsi GET
// Route::get('/index', function(){
//     echo "uji coba route menggunkan GET";
// });

// // mengirimkan atau insert data menggunakan fungsi POST
// Route::post('/toko', function(){
//     return "Data berhasil ditambahkan ke toko (dummy, belum masuk database)";
// });

// // memperbaharui data dengan metod PUT
// Route::put('/update', function(){
//     return "Data berhasil diperbarui (dummy)";
// });

// // route untuk menghapus data menggunakan metod DELET
// Route::delet('/hapus', function(){
//     return "Data berhasil dihapus (dummy)";
// });

// // route untuk merspons beberapa respons HTTPS meggunakan match
// Route::match(['get', 'post'], '/welcomeback', function(){
//     return "Selamat datang kembali (GET/POST diperbolehkan)";

// });

// // route merspon beberapa HTTPS mrnggunakan any
// Route::any('selamatdatang', function(){
//     return "Halo, ini route yang menerima semua metode HTTP (GET, POST, PUT, DELETE, dll)";
// });



// // menggunakan paremater
// Router::get('/show{id}', function($id) {echo "Nama Pramater adalah" .$id;});

// // router dengan regular expresion
// Route::get('edit/{nama}', function($nama){echo "nilai parameter adalah". $nama;});

// // dengan nama
// Route::get
