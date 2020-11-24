<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TimeLineController;
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


Auth::routes();

Route::get('/portal', [HomeController::class, 'index'])->name('portal');


Route::middleware('auth')->group(function(){

    Route::get('/', [TimeLineController::class, 'index'])->name('timeline');

    Route::get('/create', [EventController::class, 'index'])->name('create_event');
    Route::post('/create', [EventController::class, 'create'])->name('create');
    Route::get('/agenda', [EventController::class, 'show'])->name('agenda');

});

