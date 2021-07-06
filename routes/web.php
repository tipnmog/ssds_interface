<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard'); */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/ui-elements', function () {
    return view('dashboard.ui-elements');
})->name('ui-elements');

Route::middleware(['auth:sanctum', 'verified'])->get('/tables', function () {
    return view('dashboard.tables');
})->name('tables');

Route::middleware(['auth:sanctum', 'verified'])->get('/forms', function () {
    return view('dashboard.forms');
})->name('forms');

Route::middleware(['auth:sanctum', 'verified'])->get('/login', function () {
    return view('dashboard.login');
})->name('login');
