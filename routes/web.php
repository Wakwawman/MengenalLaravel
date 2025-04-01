<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\HtmlController;
use App\Http\Controllers\LatihanController;

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

Route::get('helloworld', [HelloWorldController::class, 'index']);

Route::get('ambilfile', [HelloWorldController::class, 'ambilFile']);

Route::get('getlorem', [HtmlController::class, 'getLorem']);

Route::get('tabeldatdir', [LatihanController::class, 'getTabel']);

Route::get('formdatdir', [LatihanController::class, 'getForm']);