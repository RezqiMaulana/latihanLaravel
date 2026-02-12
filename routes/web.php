<?php

use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\AuthController;

Route::get('/users', [Usercontroller::class, 'index']);
Route::get('/users/{id}', [Usercontroller::class, 'show']);


Route::get('/', function () {
    return view('home');
});

Route::post('/submit', function () {
    return 'Data Submitted!';
});

Route::get('/post/{id}/{slug}', function ($id, $slug) {
    return "Post $id: $slug";
});

Route::get('/about', function() {
    return "Tentang Kami";
});

Route::get('/produk', [ProductController::class, 'index']);
Route::get('/produk/{id}', [ProductController::class, 'show']);


Route::resource('categories' , categoryController::class);

Route::resource('books', bookController::class);

Route::resource('classrooms', \App\Http\Controllers\ClassroomController::class);
Route::resource('students', \App\Http\Controllers\StudentController::class);
