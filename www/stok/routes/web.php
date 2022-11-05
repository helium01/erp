<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontrol;
use App\Http\Controllers\barangcontrol;
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

route::get('/',[homecontrol::class,'home']);
route::get('/barang',[barangcontrol::class,'index']);
route::get('/edit/barang/{id}',[barangcontrol::class,'edit'])->name('editbarang');
route::post('/post/barang/{id}',[barangcontrol::class,'post'])->name('updatedata');