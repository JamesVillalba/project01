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
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/clients', [PageController::class, 'index'])->name('clients.index');
Route::post('/clients', [PageController::class, 'store'])->name('clients.store');
Route::get('/clients/{client}/edit', [PageController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [PageController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [PageController::class, 'destroy'])->name('clients.destroy');
