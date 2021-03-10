<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PDFController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteUri;
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

Route::resource('/order', OrderController::class);

Route::get('/pdf/{id}', [PDFController::class,'PDF'])->name('descargarPDF');







