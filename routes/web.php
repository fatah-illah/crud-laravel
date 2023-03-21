<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test2Controller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test2', [Test2Controller::class, 'index']);
Route::get('/test2/create', [Test2Controller::class, 'create']);
Route::post('/test2/store', [Test2Controller::class, 'store']);
Route::get('/test2/{id}/edit', [Test2Controller::class, 'edit']);
Route::put('/test2/{id}', [Test2Controller::class, 'update']);
Route::delete('/test2/{id}', [Test2Controller::class, 'destroy']);

Route::get('/data', [Test2Controller::class, 'index']);
Route::get('/data/create', [Test2Controller::class, 'create']);
Route::post('/test2/addData', [Test2Controller::class, 'addData']);
Route::get('/test2/{id}/edit', [Test2Controller::class, 'edit']);
Route::put('/test2/{id}', [Test2Controller::class, 'update']);
Route::delete('/test2/{id}', [Test2Controller::class, 'destroy']);
