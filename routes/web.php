<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('templet.master');
// });

Route::get('/biodata',[BiodataController::class,'index'])->name("biodata.index");
Route::get('/biodata/create',[BiodataController::class,'create'])->name("biodata.create");
Route::post('/biodata',[BiodataController::class,'store'])->name('biodata.store');
Route::get('/biodata/{id}/edit',[BiodataController::class,'edit'])->name('biodata.edit');
Route::put('/biodata/{id}',[BiodataController::class,'update'])->name('biodata.update');
Route::delete('/biodata/{id}',[BiodataController::class,'destroy'])->name('biodata.destroy');

