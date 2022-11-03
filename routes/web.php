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
Route::get('/customer-landing-page', [UsersController::class,'customer']);
Route::post('/logout', [UsersController::class,'logout']);
Route::post('/register', [UsersController::class,'register']);
Route::post('/login', [UsersController::class,'authenticate']);
Route::post('/consultations', [UsersController::class,'consultations']);
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
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/upload-testmonial', function () {
    return view('upload_testmonial');
});
Route::post('/upload_testimonial', [UsersController::class, 'upload_testimonial']);
Route::get('/edit/{id}', [UsersController::class, 'edit_consultant']);
Route::post('/edit/{id}', [UsersController::class, 'edit_consultant_data']);
Route::get('/consultant', function () {
    return view('consultant');
});
Route::get('/gallery', function () {
    return view('gallery');
});


