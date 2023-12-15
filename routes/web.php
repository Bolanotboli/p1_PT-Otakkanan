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
Route::get('/brosur', [App\Http\Controllers\brosur::class, 'showBrosur']);
Route::get('/form', [App\Http\Controllers\Formcontroller::class, 'showForm']);
Route::post('/form/submit_form', [App\Http\Controllers\Formcontroller::class, 'submitForm']);
Route::get('/dashboard', [App\Http\Controllers\dashboardControllers::class, 'index']);
Route::get('/dashboard/edit/{id}', [App\Http\Controllers\produkControllers::class, 'edit']);
Route::delete('/home/destroy/{id}', [App\Http\Controllers\produkControllers::class, 'destroy']);

