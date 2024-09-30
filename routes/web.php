<?php

use App\Http\Controllers\Admin\danhmuc\HomeDMController;
use App\Http\Controllers\Admin\product\HomeProductCtrl;
use App\Http\Controllers\Client\homeClient;
use Illuminate\Support\Facades\Route;

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

//product
Route::get('/listProduct', [HomeProductCtrl::class, 'listProduct'])->name('product.list');
Route::get('/addProduct',[HomeProductCtrl::class,'danhmuc'])->name('product.danhmuc');
Route::post('/addProduct',[HomeProductCtrl::class,'add'])->name('product.add');
Route::delete('/delProduct/{id}',[HomeProductCtrl::class,'del'])->name('product.del');
Route::get('/edit/{id}',[HomeProductCtrl::class,'edit'])->name('product.edit');
Route::put('/edit/{id}',[HomeProductCtrl::class,'update'])->name('product.update');


// danh muc 
Route::get('/listDM',[HomeDMController::class,'hienthi'])->name('dm.list');

// client
Route::get('/',[homeClient::class,'home'])->name('home.page');
Route::get('/chitiet/{id}',[homeClient::class,'chitiet'])->name('chitiet.page');