<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\UserVitalsController;

use App\Http\Middleware\AdminMiddleware;




Route::get('/', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\Auth\ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [App\Http\Controllers\Auth\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [App\Http\Controllers\Auth\ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [App\Http\Controllers\Auth\ProfileController::class, 'updatePassword'])->name('profile.password');
    
    // Delete account
    Route::delete('/profile', [App\Http\Controllers\Auth\ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test-auth', function () {
    dd(auth()->check(), auth()->user());
});

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('admin')->middleware('auth')->group(function(){
    
    Route::get('users', [UserController::class,'index'])->name('admin.users.index');
    Route::get('users/create', [UserController::class,'create'])->name('admin.users.create');
    Route::post('users', [UserController::class,'store'])->name('admin.users.store');
    Route::get('users/{id}/edit', [UserController::class,'edit'])->name('admin.users.edit');
    Route::put('users/{id}', [UserController::class,'update'])->name('admin.users.update');
    Route::delete('users/{id}', [UserController::class,'destroy'])->name('admin.users.destroy');
    Route::get('/users/{user}', [UserController::class, 'show'])
    ->name('admin.users.show');
    Route::get('/user-vitals', [UserVitalsController::class, 'index'])
     ->name('admin.users.vitals');

});


Route::middleware(['auth', AdminMiddleware::class])->group(function() {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Add other admin routes here
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        
    Route::get('users', [UserController::class,'index'])->name('admin.users.index');
    Route::get('users/create', [UserController::class,'create'])->name('admin.users.create');
    Route::post('users', [UserController::class,'store'])->name('admin.users.store');
    Route::get('users/{id}/edit', [UserController::class,'edit'])->name('admin.users.edit');
    Route::put('users/{id}', [UserController::class,'update'])->name('admin.users.update');
    Route::delete('users/{id}', [UserController::class,'destroy'])->name('admin.users.destroy');
    Route::get('/users/{user}', [UserController::class, 'show'])
    ->name('admin.users.show');
    
});