<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\InterventionController;

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

Route::get('/', [ConsumerController::class, 'getAllConsumers'])->name('home');
Route::get('/consumer/{id}', [ConsumerController::class, 'getConsumerInfo'])->name('consumer');
Route::get('/consumer/delete/{id}', [ConsumerController::class, 'delete'])->name('consumer.delete');
Route::get('/greska', [ConsumerController::class, 'greska'])->name('greska');
Route::post('/insert', [ConsumerController::class, 'store'])->name('insert');

Route::post('/insert/intervention', [InterventionController::class, 'store'])->name('intervention.store');
