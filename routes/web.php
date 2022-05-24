<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('department')->group(function(){

    Route::get('/all',[DepartmentController::class,'index']);
    Route::get('/delete/{id}',[DepartmentController::class,'destroy']);
    Route::get('/add',[DepartmentController::class,'create']);
    Route::post('/store',[DepartmentController::class,'store']);
    Route::get('/show/{id}',[DepartmentController::class,'show']);
    Route::get('/edit/{id}',[DepartmentController::class,'edit']);
    Route::post('/update/{id}',[DepartmentController::class,'update']);

});

