<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\Friendscontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Notifications;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/portal', [HomeController::class, 'index'])->name('portal');

Route::middleware('auth')->group(function(){


    //event routes
    Route::resource('event', EventController::class)->names([
        'index' => 'agenda',
        'create' => 'create_event',
        'store' => 'create',
        'destroy' => 'delete_event',
        'update' => 'update_event',
        'show' => 'event',
        'edit' => 'edit_event',
    ]);
    Route::get('/', [EventController::class, 'index'])->name('agenda');

    //invitation route
    Route::resource('invitation', InvitationController::class);
    Route::get('/invitation/create/{event:id}', [InvitationController::class, 'create'])->name('invite_friends');
    Route::get('/accept_invite/{invitation:id}', [Notifications::class, 'accept_invite'])->name('accept_invite');
    Route::get('/decline_invite/{invitation:id}', [InvitationController::class, 'decline_invite'])->name('decline_invite');

    // Profile routes
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit_profile');
    Route::get('/profile/{user:id}', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/{user:id}/update', [ProfileController::class, 'update'])->name('update_profile');

    //Friend routes
    Route::get('/explore_users', [Friendscontroller::class])->name('explore_users');
    Route::get('/friends', [Friendscontroller::class, 'show'])->name('friends');
    Route::post('/addfriend/{user:id}', [Friendscontroller::class, 'create'])->name('add_friend');
    Route::delete('/friend/{user:id}', [Friendscontroller::class, 'destroy'])->name('remove_friend');
    Route::get('/accept_request/{friend:id}', [Friendscontroller::class, 'accept_request'])->name('accept_request');
    Route::get('/decline_request/{friend:id}', [Friendscontroller::class, 'decline_request'])->name('decline_request');

    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

});


