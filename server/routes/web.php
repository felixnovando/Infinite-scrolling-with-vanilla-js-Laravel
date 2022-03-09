<?php

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

Route::post('/getItem', [\App\Http\Controllers\ItemController::class, 'getItems']);

Route::get('/all', [\App\Http\Controllers\ItemController::class, 'getAllItems']);

Route::get('/', function () {
    return "<p>Prohitited Link - Back End Only</p>";
});
