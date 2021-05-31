<?php

use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\BuildingController::class, 'show'])->name('show');

Route::get('/search', [App\Http\Controllers\BuildingController::class, 'search'])->name('search');

Route::get('/projects', [App\Http\Controllers\BuildingController::class, 'showAll'])->name('showAll');

Route::get('/projects-all', [App\Http\Controllers\BuildingController::class, 'showOverallAll'])
    ->name('showOverallAll');

Route::get('/projects/{project}', [App\Http\Controllers\BuildingController::class, 'showOne'])
    ->name('showOne');

Route::get('/how-to-order', [App\Http\Controllers\InformationController::class, 'show'])->name('show');

Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'show'])->name('show');

Route::post('/reg', [App\Http\Controllers\RegController::class, 'ragist']) -> name('regis');

Route::post('/log', [App\Http\Controllers\RegController::class, 'logun']) -> name('login');

Route::post('/contact/submit',
    [App\Http\Controllers\ContactController::class, 'send_feedback']
)->name('contact-form');

