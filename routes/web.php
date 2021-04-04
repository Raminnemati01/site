<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\Homecontroller;


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

Route::get('/',[Homecontroller::class,'index'] );




Route::prefix('/adminpanel')->group(function(){

  Route::get('/', function () {
      return view('admin.home');
  });


  Route::Resource('categories',CategoryController::class);

});

//
//

//
// Route::get('/adminpanel/categories',[CategoryController::class,'index']);
//
// Route::get('/adminpanel/categories/create',[CategoryController::class,'create']);
//
// Route::post('/adminpanel/categories/store',[CategoryController::class,'store']);
//
// Route::get('/adminpanel/categories/{category}/edit',[CategoryController::class,'edit']);
//
// Route::patch('/adminpanel/categories/{category}',[CategoryController::class,'update']);
//
// Route::delete('/adminpanel/categories/{category}',[CategoryController::class,'destroy']);
