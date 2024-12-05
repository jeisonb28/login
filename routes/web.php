<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MotocicletaController;


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
   ->middleware('guest')
   ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->name('login.index');
   
Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
     ->middleware('auth')
     ->name('logout');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.Admin')
    ->name('admin.index');

    Route::middleware('auth')->group(function () {
        Route::get('/motocicletas/create', [MotocicletaController::class, 'create'])
        ->name('motocicletas.create');
        Route::post('/motocicletas', [MotocicletaController::class, 'store'])
        ->name('motocicletas.store');
        
        Route::get('/motocicletas/pdf', [MotocicletaController::class, 'generatePdf'])
        ->name('motocicletas.pdf');
       
        
    });



