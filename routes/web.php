<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UsersController::class,'getAuth']);
Route::get('/consultant-landing-page', [UsersController::class,'consultant']);
Route::get('/admistration-landing-page', [UsersController::class,'adminstrator']);
Route::post('/logout', [UsersController::class,'logout']);
Route::post('/register', [UsersController::class,'register']);
Route::post('/login', [UsersController::class,'authenticate']);
Route::get('/home', [UsersController::class,'index']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/session', function () {
    return view('session');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/about', function () {
    return view('about');
})->middleware('auth');
Route::get('/contact', function () {
    return view('contact');
})->middleware('auth');
Route::get('/consultant', function () {
    return view('consultant');
})->middleware('auth');
Route::get('/gallery', function () {
    return view('gallery');
})->middleware('auth');


