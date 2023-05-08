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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('Data', [App\Http\Controllers\HomeController::class, 'Data'])->name('Data');

// Route::get('Dept', [App\Http\Controllers\AdminController::class, 'Dept'])->name('Dept');
Route::post('Store', [App\Http\Controllers\AdminController::class, 'Store'])->name('Store');

Route::get('Dept', [App\Http\Controllers\SpecController::class, 'Dept'])->name('Dept');
Route::post('Store2', [App\Http\Controllers\SpecController::class, 'Store2'])->name('Store2');

Route::get('Dashboard', [App\Http\Controllers\AdminController::class, 'Dashboard'])->name('Dashboard');
Route::post('Emp', [App\Http\Controllers\AdminController::class, 'Emp'])->name('Emp');

Route::get('Roles', [App\Http\Controllers\AdminController::class, 'Roles'])->name('Roles');
Route::post('role_p', [App\Http\Controllers\AdminController::class, 'role_p'])->name('role_p');
Route::post('per_p', [App\Http\Controllers\SpecController::class, 'per_p'])->name('per_p');

Route::get('Patient', [App\Http\Controllers\AdminController::class, 'Patient'])->name('Patient');
Route::post('Patient_D', [App\Http\Controllers\AdminController::class, 'Patient_D'])->name('Patient_D');

Route::get('Pharm', [App\Http\Controllers\AdminController::class, 'Pharm'])->name('Pharm');
Route::post('Pharm_p', [App\Http\Controllers\AdminController::class, 'Pharm_p'])->name('Pharm_p');

Route::get('Inventory', [App\Http\Controllers\SpecController::class, 'Inventory'])->name('Inventory');

Route::get('Reception', [App\Http\Controllers\RegisterController::class, 'Reception'])->name('Reception');
Route::post('Reception2', [App\Http\Controllers\RegisterController::class, 'Reception2'])->name('Reception2');

Route::get('Nurse', [App\Http\Controllers\RegisterController::class, 'Nurse'])->name('Nurse');


Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
