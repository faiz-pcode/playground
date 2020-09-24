<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;

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

Route::get('/websocket', function () {
    return view('websocket.home');
});

Route::get('/websocket/trigger', function () {
    return view('websocket.trigger');
})->name('trigger');

Route::post('/websocket/trigger', [ItemController::class, 'store']);
