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
//Route::get('/agenda', [HomeController::class, 'index'])->name('agenda');


Route::middleware('auth')->group(function(){


    Route::get('/', [TimeLineController::class, 'index'])->name('timeline');

    //event routes
    Route::resource('event', EventController::class)->names([
        'index' => 'agenda',
        'create' => 'create_event',
        'store' => 'create',
        'destroy' => 'delete_event',
        'show' => 'created_events'
    ]);

    // Profile routes
    Route::get('/profile/{user:id}', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/{user:id}/edit', [ProfileController::class, 'edit'])->name('edit_profile');
    Route::get('/profile/{user:id}/update', [ProfileController::class, 'update'])->name('update_profile');

    //Friend routes
    Route::get('/friends', [Friendscontroller::class, 'index'])->name('friends');
    Route::post('/addfriend', [Friendscontroller::class, 'create'])->name('add_friend');
});

