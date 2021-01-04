<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\Friendscontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

    //Event routes
//    Route::get('/create', [EventController::class, 'index'])->name('create_event');
//    Route::get('/agenda', [EventController::class, 'show'])->name('agenda');
//    Route::post('/create', [EventController::class, 'create'])->name('create');
//    Route::get('/delete/{event:id}', [EventController::class, 'destroy'])->name('delete');
//    Route::get('/event/{event:id}/edit', [EventController::class, 'edit'])->name('edit_event');
    Route::resource('event', EventController::class)->names([
        'index' => 'events',
        'create' => 'create_event',
        'store' => 'create',
        'destroy' => 'delete_event',
        'show' => 'agenda'
    ]);


//    Route::get('/event/{user:username}/edit', [EventController::class, 'edit']);

    // Profile routes
    Route::get('/profile/{user:id}', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/{user:id}/edit', [ProfileController::class, 'edit'])->name('edit_profile');
    Route::get('/profile/{user:id}/update', [ProfileController::class, 'update'])->name('update_profile');

    //Friend routes
    Route::get('/friends', [Friendscontroller::class, 'index'])->name('friends');
    Route::post('/addfriend', [Friendscontroller::class, 'create'])->name('add_friend');
});

