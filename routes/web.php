<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;


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

Route::get('admin/anasayfa', function () {
    return view('admin/master');
})->name('master');


Route::group(['prefix' => 'admin/category'], function () {

    Route::get('index', [CategoryController::class, 'index'])->name('categoryindex');
    //link adı                                    //fonksiyon adı
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');

    Route::post('createfile', [CategoryController::class, 'createfile'])->name('createfile');

    Route::get('createform', [CategoryController::class, 'createform'])->name('createform');

    Route::post('update', [CategoryController::class, 'update'])->name('update');

    Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('delete');


});

Route::group(['prefix' => 'admin/product'], function () {

    Route::get('index', [ProductController::class, 'index'])->name('productindex');

    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');

    Route::get('productform', [ProductController::class, 'productform'])->name('productform');

    Route::post('createproduct', [ProductController::class, 'createproduct'])->name('createproduct');

    Route::post('productupdate', [ProductController::class, 'productupdate'])->name('productupdate');

    Route::get('delete/{id}', [ProductController::class, 'delete'])->name('delete');


});

Route::group(['prefix' => 'admin/cart'], function () {

    Route::get('index', [CartController::class, 'index'])->name('cartindex');

    Route::get('edit/{id}', [CartController::class, 'edit'])->name('edit');

    Route::get('cartcreateform', [CartController::class, 'cartcreateform'])->name('cartcreateform');

    Route::get('createform', [CartController::class, 'createform'])->name('createform');

    Route::post('cartupdate', [CartController::class, 'cartupdate'])->name('cartupdate');

    Route::get('delete/{id}', [CartController::class, 'delete'])->name('delete');

    Route::get('view', [CartController::class, 'view'])->name('cartview');

});


Route::group(['prefix' => 'admin/user'], function () {

    Route::get('index', [UserController::class, 'index'])->name('userindex');

    Route::get('edit/{id}', [UserController::class, 'edit'])->name('useredit');

    Route::get('userform', [UserController::class, 'userform'])->name('userform');

    Route::post('createuser', [UserController::class, 'createuser'])->name('createuser');

    Route::post('userupdate', [UserController::class, 'userupdate'])->name('userupdate');

    Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete');


});


