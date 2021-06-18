<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('urls', [App\Http\Controllers\UrlController::class, 'index']);
Route::post('urls', [App\Http\Controllers\UrlController::class, 'store']);
//Route::delete('/urls/{id}', [UrlController::class, 'destroy']);

Route::get('{code}', [App\Http\Controllers\UrlController::class, 'redirectUrl']);
