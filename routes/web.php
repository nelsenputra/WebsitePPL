<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\FormController;

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

//proyek admin
Route::get('listProyek', [ProyekController::class, 'index'])->name('proyek.index');
Route::get('proyek/create', [ProyekController::class, 'create'])->name('proyek.create');
Route::post('proyek', [ProyekController::class, 'store'])->name('proyek.store');
Route::get('proyek/{id}/edit', [ProyekController::class, 'edit'])->name('proyek.edit');
Route::put('proyek/{id}', [ProyekController::class, 'update'])->name('proyek.update');

//form mhs
Route::get('proyek', [FormController::class, 'index'])->name('proyek');
Route::get('form/create', [FormController::class, 'create'])->name('form.create');
Route::post('form', [FormController::class, 'store'])->name('form.store');
Route::get('succes', [FormController::class, 'succes'])->name('succes');
Route::get('proyek/{id}/show', [FormController::class, 'show'])->name('proyek.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
