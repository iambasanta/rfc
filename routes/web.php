<?php

use App\Http\Controllers\Admin\AdminDashobardController;
use App\Http\Controllers\Admin\WorkshopController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [AdminDashobardController::class, 'index'])->name('index');

        Route::get('/workshops', [WorkshopController::class, 'index'])->name('workshops.index');
        Route::get('/workshops/create', [WorkshopController::class, 'create'])->name('workshops.create');
        Route::post('/workshops', [WorkshopController::class, 'store'])->name('workshops.store');
        Route::get('/workshops/{workshop}/edit', [WorkshopController::class, 'edit'])->name('workshops.edit');
        Route::patch('/workshops/{workshop}/edit', [WorkshopController::class, 'update'])->name('workshops.update');
        Route::delete('/workshops/{workshop}/delete', [WorkshopController::class, 'destroy'])->name('workshops.destroy');
    });
});

require __DIR__ . '/auth.php';
