<?php

use App\Http\Controllers\AuthController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use PHPUnit\Framework\Attributes\Group;

// Route::inertia('/', 'Home', ['users' => User::paginate(5)])->name('home');

// for searching functionality create new function on home page
Route::get('/', function( Request $request){
    // return inertia('Home', [
    //     'users' => User::when($request->search, function($query) use ($request){
    //         $query
    //         ->where('name','like','%'.'$request->search'.'%')
    //         ->orWhere('email','like','%'.'$request->search'.'%');


    //     })->paginate(5)->withQueryString(),
    //     'searchTerm' => $request->search
    // ]);
    $query = User::when($request->search, function ($query) use ($request) {
        $query->where('name', 'like', '%' . $request->search . '%')
              ->orWhere('email', 'like', '%' . $request->search . '%');
    });

    // See the final output
    //dd($query->get(), $request->search);

    return inertia('Home', [
        'users' => $query->paginate(5)->withQueryString(),
        'searchTerm' => $request->search,
        'can' => [
            'delete_user' =>
                Auth::user() ?
                    Auth::user()->can('delete', user::class) :
                    null ]
    ]);
})->name('home');

Route::middleware('auth')->group(function () {
    Route::inertia('/dashboard', 'Dashboard')->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {

    Route::inertia('/register', 'Auth/Register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::inertia('/login', 'Auth/Login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/main', [AuthController::class, 'main'])->name('main');


});


// Route::get('/', function () {
//     return Inertia::render('Home');
// })->name('home');

// Route::get('/about', function () {
//     return Inertia('About',['user' => 'Jone Doe']);
// })->name('about');

// same method as above worked below
//Route::inertia('/about', 'About',['user' => 'Mike']);
