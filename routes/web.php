<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard-profile');
});
Route::get('Mr', function () {
    return view('Mr');
});
Route::get('student', function () {
    return view('student');
});

Route::get('tables-editable', function () {
    return view('tables-editable');
});

Route::get('add-member', function () {
    return view('add-member');
});
Route::get('orders', function () {
    return view('orders');
});
Route::get('projects-grid', function () {
    return view('projects-grid');
});

Route::get('blog-details', function () {
    return view('blog-details');
});