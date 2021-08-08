<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NoteController;

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

Route::view('/', 'index');

Route::middleware('auth:sanctum')->group(function () {

    Route::get('dashboard', [PageController::class, 'dashboard'])
        ->name('dashboard');

    Route::resource('notes', NoteController::class);
});

// Route::get('dashboard', [PageController::class, 'dashboard'])
//     ->middleware('auth:sanctum')
//     ->name('dashboard');

// Route::resource('notes', NoteController::class)
//     ->middleware('auth:sanctum');

/* Default */

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
