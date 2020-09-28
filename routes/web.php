<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MessageController;

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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/websocket', [ItemController::class, 'homeIndex']);
    
    Route::get('/websocket/trigger', [ItemController::class, 'triggerIndex'])->name('trigger');

    Route::get('/message/index', [MessageController::class, 'index']);
    Route::get('/message/send', [MessageController::class, 'send']);
    
    Route::post('/websocket/trigger', [ItemController::class, 'store']);
});
