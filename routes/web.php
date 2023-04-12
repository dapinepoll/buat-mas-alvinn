<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

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

//path url = endpoint


Route::get('/', [MasterController::class,'index']);

Route::get('/product', [MasterController::class,'product']);

Route::get('/product/add', [MasterController::class,'productAdd']);
Route::post('/product/add', [MasterController::class,'add']);

Route::get('/update/{id}', [MasterController::class,'productUpdate']);
Route::get('/delete/{id}', [MasterController::class,'delete']);
Route::post('/product/update', [MasterController::class,'update']);

Route::post('/search', [MasterController::class,'search']);








































//Route::get('/register', [MasterController::class,'register']);
//Route::get('/login', [MasterController::class,'login']);
//Route::get('/logout', [MasterController::class,'logout']);
