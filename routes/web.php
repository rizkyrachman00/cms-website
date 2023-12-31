<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::get(
	'/localization/{language}',
	App\Http\Controllers\LocalizationController::class
)->name('localization.switch');

Route::get('/', function () {
	return view('welcome');
});

Route::get('/dashboard', function () {
	return view('layouts/dashboard');
});


Auth::routes(
	[
		'register' => false
	]
);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {

	Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
});
