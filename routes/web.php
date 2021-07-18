<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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

Route::get('/', [ProjectController::class, 'index'])
    ->name('welcome');

Route::get('/project/crete', [ProjectController::class, 'create'])
    ->name('project.create')->middleware('auth');

Route::post('/store', [ProjectController::class, 'store'])
    ->name('project.store')->middleware('auth');

Route::get('/project/show/{id}', [ProjectController::class, 'show'])
    ->name('project.show')->middleware('auth');

Route::get('/dashboard', [ProjectController::class, 'dashboard'])
    ->name('dashboard')
    ->middleware('auth');

Route::get('/destroy/{id}', [ProjectController::class, 'destroy'])
    ->name('projects.destroy')
    ->middleware('auth');

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/
