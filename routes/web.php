<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/**
 * USERS ROUTES
 */

// Route::get('/', function () {
//     return view('welcome');
// });

// LANGUAGE
Route::get('/lang/{lang}', [App\Http\Controllers\Frontend\LanguageController::class, 'languages'])->name('languages');

// HOME PAGE
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

// ABOUT PAGE
Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');

// SERVICES PAGE
Route::get('/services', [App\Http\Controllers\Frontend\ServicesController::class, 'index'])->name('services');

// CONTACTS PAGE
Route::get('/contacts', [App\Http\Controllers\Frontend\ContactsController::class, 'index'])->name('contacts');

// NOTFOUND PAGE
Route::get('/notfound', [App\Http\Controllers\Frontend\NotFoundController::class, 'index'])->name('notfound');

/**
 * ADMINS ROUTES
 */

Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('login'); 

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
