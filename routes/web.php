<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MyEventsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/events', [EventController::class,'index'])->name('events.index');
Route::get('/events/create',[EventController::class,'create'])->name('events.create');
Route::post('/events',[EventController::class,'store'])->name('events.store');
Route::get('/events/search', [EventController::class, 'search'])->name('events.search');

Route::get('/myevents', [MyEventsController::class,'index'])->name('myevents.index')->middleware('auth');
Route::post('/myevents/{id}', [MyEventsController::class,'destroy'])->name('event-delete');
Route::get('/myevents/edit/{id}', [MyEventsController::class,'edit'])->name('myevents.edit');
Route::post('/myevents/update/{id}', [MyEventsController::class,'update'])->name('myevents.update');


require __DIR__.'/auth.php';
