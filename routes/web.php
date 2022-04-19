<?php

use App\Http\Controllers\itemController;
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

    Route::get('/', [itemController::class, 'index'])->name('itens-index');
    Route::get('/create', [itemController::class, 'create'])->name('itens-create');
    Route::post('/itens', [itemController::class, 'store'])->name('itens-store');
    Route::get('/itens/{id}/edit', [ItemController::class, 'edit'])->where('id', '[0-9]+')->name('itens-edit');
    Route::put('/itens/{id}', [ItemController::class, 'update'])->where('id', '[0-9]+')->name('itens-update');

