<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InsertDataController;
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
/*
Route::get('/', function () {
    return view('home');
});

*/
Route::get('/', [PagesController::class,'welcome']);
Route::get('/home', [PagesController::class,'home']);
Route::get('/student', [PagesController::class,'student']);
Route::get('/student/print', [PagesController::class,'print']);
Route::get('/help', [PagesController::class,'help']);
Route::get('/student/update', [PagesController::class,'updateData']);
Route::get('/student/insert', [PagesController::class,'insertData']);
Route::post('/student/insert', [InsertDataController::class, 'insertData']);
Route::get('/student/{data_student}', [PagesController::class,'show']);
Route::delete('/student/{data_student}', [PagesController::class,'destroy']);
Route::get('/student/{data_student}/edit', [PagesController::class,'edit']);
Route::patch('/student/{data_student}', [PagesController::class,'update']);