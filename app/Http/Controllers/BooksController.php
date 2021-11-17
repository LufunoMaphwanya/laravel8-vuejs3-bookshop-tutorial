<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Show the library
     *
     * @return \Illuminate\View\View
     */
    public function library()
    {
        return Book::all();
    }
}
