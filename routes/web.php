<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berarti mengambil fungsi di dalam controller
//route menggunkan resources berarti mengambil class
//route menggunakan namne atau by name
Route::get('/pegawai', [PegawaiController::class, 'index']);