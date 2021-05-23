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

Auth::routes();

Route::get('/', [App\Http\Controllers\BuildingController::class, 'show'])->name('show');

Route::get('/projects', [App\Http\Controllers\BuildingController::class, 'showAll'])->name('showAll');

Route::get('/projects/{project}', [App\Http\Controllers\BuildingController::class, 'showOne'])
    ->name('showOne');

Route::get('/how-to-order', [App\Http\Controllers\InformationController::class, 'show'])->name('show');

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'show'])->name('show');

Route::post('/contacts',
    [App\Http\Controllers\ContactController::class, 'send_feedback']
)->name('send_feedback');

