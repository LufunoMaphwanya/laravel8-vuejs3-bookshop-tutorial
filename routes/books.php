<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

Route::get('books', [BooksController::class, 'library'])->middleware('auth');;
Route::get('books/{book_id}/cover', [BooksController::class, 'cover']);

