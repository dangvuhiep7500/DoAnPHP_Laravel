<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


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




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/redirect',[HomeController::class,'redirect']);

// Route::get('/categorize/{category}', 'UserProductsController@products')->name('categorize');

route::get('/categorize/{category}',[HomeController::class,'productcategory']);

route::get('/',[HomeController::class,'index']);

route::get('/productdetail/{id}',[HomeController::class,'productdetail']);

route::get('/addcategory',[AdminController::class,'addcategory']);

route::post('/uploadcategory',[AdminController::class,'uploadcategory']);

route::get('/addproduct',[AdminController::class,'addproduct']);

route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

route::get('/showproduct',[AdminController::class,'showproduct']);

route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

route::get('/updateview/{id}',[AdminController::class,'updateview']);

route::get('/updatecart/{id}',[HomeController::class,'updatecart']);

route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);

route::get('/search',[HomeController::class,'search']);

route::post('/addcart/{id}',[HomeController::class,'addcart']);

route::get('/showcart',[HomeController::class,'showcart']);

route::get('/delete/{id}',[HomeController::class,'deletecart']);

route::post('/order',[HomeController::class,'confirmorder']);

route::get('/showorder',[AdminController::class,'showorder']);

route::get('/purchasehistory',[HomeController::class,'showpurchasehistory']);

route::get('/updatestatus/{id}',[AdminController::class,'updatestatus']);






