<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinksController;

Route::get('/', function () {
    return view('pages.links');
})->name('home');


Route::post('/store', [LinksController::class, 'store'])->name('store');
Route::get('/getall', [LinksController::class, 'getall'])->name('getall');
Route::get('/link/{id}/edit', [LinksController::class, 'edit'])->name('edit');
Route::post('/link/update', [LinksController::class, 'update'])->name('update');
Route::delete('/link/delete', [LinksController::class, 'delete'])->name('delete');
