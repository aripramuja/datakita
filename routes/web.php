<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::get('/help', [PagesController::class,'help']);
Route::get('/student/insert', [PagesController::class,'insertData']);