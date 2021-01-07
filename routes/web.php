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
        'update' => 'update_event',
        'show' => 'created_events',
    ]);

    Route::get('/your_created_events', [EventController::class, 'show_your_created_events'])->name('your_created_events');

    //invitation route
    Route::resource('invitation', InvitationController::class);
    Route::get('/invitations',[InvitationController::class, 'show_your_invited_events'])->name('your_invited_events');
    Route::get('/invitation/create/{event:id}', [InvitationController::class, 'create']);
    Route::get('/invited_to_your_event', [InvitationController::class, 'show_your_invited_events'])->name('invited_to_your_event');




    // Profile routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit_profile');
    Route::get('/profile/{user:id}/update', [ProfileController::class, 'update'])->name('update_profile');

    //Friend routes
    Route::get('/explore_friends', [Friendscontroller::class, 'index'])->name('explore_friends');
    Route::get('/friends', [Friendscontroller::class, 'show'])->name('friends');
    Route::get('/addfriend/{user:id}', [Friendscontroller::class, 'create'])->name('add_friend');
    Route::delete('/friend/{user:id}', [Friendscontroller::class, 'destroy'])->name('remove_friend');


});

