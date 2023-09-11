<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuCon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('components.profil');
});

Route::get('/produk', function () {
    return view('components.produk');
});
Route::get('/dstbr', function () {
    return view('components.distributor');
});

Route::get('/bukutamu',[BukuCon::class, 'index']);
Route::get('/bukutamu/tambah',[BukuCon::class, 'tambah']);
Route::post('/bukutamu/store',[BukuCon::class, 'store']);
Route::delete('/bukutamu/{id}',[BukuCon::class, 'destroy']);
Route::get('/bukutamu/edit/{id}',[BukuCon::class,'edit']);
Route::post('/bukutamu/update',[BukuCon::class,'storeupdate']);
