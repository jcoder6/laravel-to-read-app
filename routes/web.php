<?php

use Illuminate\Support\Facades\Route;

Route::get('books', [App\Http\Controllers\BooksController::class, 'index']);
Route::get('books/create', [App\Http\Controllers\BooksController::class, 'create']);
Route::post('books/create', [App\Http\Controllers\BooksController::class, 'store']);
Route::get('books/{id}/edit', [App\Http\Controllers\BooksController::class, 'edit']);
Route::put('books/{id}/update', [App\Http\Controllers\BooksController::class, 'update']);
Route::get('books/{id}/confirm', [App\Http\Controllers\BooksController::class, 'confirmDelete']);
Route::get('books/{id}/delete', [App\Http\Controllers\BooksController::class, 'delete']);

Route::get('/', function () {
    return view('welcome');
});
