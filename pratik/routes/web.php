<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswacontrol;


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

Route::get('/', [Mahasiswacontrol::class,'index']);
Route::post('/masuk',[Mahasiswacontrol::class,'store']);
Route::get('/update/{id}',[Mahasiswacontrol::class,'edit']);
Route::post('/change/{id}',[Mahasiswacontrol::class,'change']);
Route::post('/delete/{id}',[Mahasiswacontrol::class,'hapuse']);

