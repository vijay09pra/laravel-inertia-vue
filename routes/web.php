<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;


Route::inertia('/', 'Home')->name('home');

Route::middleware('auth')->group(function () {
    Route::inertia('/dashboard', 'Dashboard')->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {

    Route::inertia('/register', 'Auth/Register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::inertia('/login', 'Auth/Login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

});


// Route::get('/', function () {
//     return Inertia::render('Home');
// })->name('home');

// Route::get('/about', function () {
//     return Inertia('About',['user' => 'Jone Doe']);
// })->name('about');

// same method as above worked below
//Route::inertia('/about', 'About',['user' => 'Mike']);
