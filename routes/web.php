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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/invoice', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/invoice',[App\Http\Controllers\InvoiceController::class, 'index'])->name('invoice');
Route::get('/suminvoice/mytransaction',[App\Http\Controllers\SuminvoiceController::class, 'mytransaction'])->name('suminvoice');
Route::post('/suminvoice/mytransaction',[App\Http\Controllers\SuminvoiceController::class, 'searchmytransaction'])->name('suminvoice');
Route::get('/suminvoice/{id}',[App\Http\Controllers\SuminvoiceController::class, 'show'])->name('suminvoice');
Route::get('/suminvoice/{id}/dotmatrix',[App\Http\Controllers\SuminvoiceController::class, 'dotmatrix'])->name('suminvoice');
Route::get('/suminvoice/{id}/print',[App\Http\Controllers\SuminvoiceController::class, 'print'])->name('suminvoice');
Route::get('/suminvoice/{id}',[App\Http\Controllers\SuminvoiceController::class, 'show'])->name('suminvoice');
Route::patch('/suminvoice/{id}',[App\Http\Controllers\SuminvoiceController::class, 'updated'])->name('suminvoice');




