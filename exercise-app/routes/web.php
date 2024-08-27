<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
// Route::get('/user/dsadsa/dsadsa/dsadas/dsadas', function () {
//     return dd('user');
// })->name('user');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $users = User::all();
        
        return view('dashboard',compact('users'));
    })->name('dashboard');

});


Route::get('/users',[UserController::class,'index']);
Route::get('/users-create',[UserController::class,'create']);
Route::get('/users/{id}', [UserController::class, 'show']);

