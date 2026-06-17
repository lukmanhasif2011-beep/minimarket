<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('templet.master');
// });


Auth::routes([
 'register'=> 'false',
 'reset'=> 'false',
 'verify'=> 'false',
]);


Route::redirect('/', '/login');
Route::middleware('auth')->group(function () {
Route::get('/biodata',[BiodataController::class,'index'])->name("biodata.index");
Route::get('/biodata/create',[BiodataController::class,'create'])->name("biodata.create");
Route::post('/biodata',[BiodataController::class,'store'])->name('biodata.store');
Route::get('/biodata/{id}/edit',[BiodataController::class,'edit'])->name('biodata.edit');
Route::put('/biodata/{id}',[BiodataController::class,'update'])->name('biodata.update');
Route::delete('/biodata/{id}',[BiodataController::class,'destroy'])->name('biodata.destroy');

Route::get('/user', [UserController::class, "index"])->name("user.index");
Route::get('/user/create',[UserController::class,'create'])->name("user.create");
Route::post('/user',[UserController::class,'store'])->name('user.store');
Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('user.edit');
Route::put('/user/{id}',[UserController::class,'update'])->name('user.update');
Route::delete('/user/{id}',[UserController::class,'destroy'])->name('user.destroy');

Route::get('/produk', [ProdukController::class, "index"])->name("produk.index");
Route::get('/produk/create',[ProdukController::class,'create'])->name("produk.create");
Route::post('/produk',[ProdukController::class,'store'])->name('produk.store');
Route::get('/produk/{id}/edit',[ProdukController::class,'edit'])->name('produk.edit');
Route::put('/produk/{id}',[ProdukController::class,'update'])->name('produk.update');
Route::delete('/produk/{id}',[ProdukController::class,'destroy'])->name('produk.destroy');

});




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

