<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\Friendscontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimeLineController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/portal', [HomeController::class, 'index'])->name('portal');

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

    //invitation route
    Route::resource('invitation', InvitationController::class);
    Route::get('/invitation/create/{event:id}', [InvitationController::class, 'create']);

    // Profile routes
    Route::get('/profile/{user:id}', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/{user:id}/edit', [ProfileController::class, 'edit'])->name('edit_profile');
    Route::get('/profile/{user:id}/update', [ProfileController::class, 'update'])->name('update_profile');

    //Friend routes
    Route::get('/explore_friends', [Friendscontroller::class, 'index'])->name('explore_friends');
    Route::get('/friends/{user:id}', [Friendscontroller::class, 'show'])->name('friends');
    Route::get('/addfriend/{user:id}', [Friendscontroller::class, 'create'])->name('add_friend');


});

