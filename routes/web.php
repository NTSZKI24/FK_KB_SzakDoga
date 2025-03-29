<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MyEventsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [EventController::class,'index'])->name('events.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/change-status', [ProfileController::class, 'changeStatus'])->name('profile.changeStatus');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/events', [EventController::class,'index'])->name('events.index');
Route::get('/events/create',[EventController::class,'create'])->name('events.create')->middleware('auth');
Route::post('/events',[EventController::class,'store'])->name('events.store');
Route::get('/events/search', [EventController::class, 'search'])->name('events.search');
Route::get('/events/filter', [EventController::class, 'filter'])->name('events.filter');

Route::get('/myevents', [MyEventsController::class,'index'])->name('myevents.index')->middleware('auth');
Route::post('/myevents/{id}', [MyEventsController::class,'destroy'])->name('event-delete');
Route::get('/myevents/edit/{id}', [MyEventsController::class,'edit'])->name('myevents.edit');
Route::post('/myevents/update/{id}', [MyEventsController::class,'update'])->name('myevents.update');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('auth:admin')->group(function () {
        Route::get('/events', [AdminController::class, 'index'])->name('admin.events.index');
        Route::get('/admin/events/{id}/edit', [AdminController::class, 'edit'])->name('admin.events.edit');
        Route::put('/admin/events/{id}', [AdminController::class, 'update'])->name('admin.events.update');
        Route::delete('/admin/events/{id}', [AdminController::class, 'destroy'])->name('admin.events.destroy');
        Route::get('/events/create', [AdminController::class, 'create'])->name('admin.events.create');
        Route::post('/events', [AdminController::class, 'store'])->name('admin.events.store');

        Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
        Route::post('/users', [AdminUserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    });
});

require __DIR__.'/auth.php';
