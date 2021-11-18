<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Image;

class BooksController extends Controller
{
    /**
     * Show the library
     *
     * @return \Illuminate\View\View
     */
    public function library()
    {
        return view('books-list', [
            'books' => Book::paginate(5, ['id', 'title', 'subtitle', 'cover'])
        ]);

        // return             [Book::paginate(5, ['id', 'title', 'subtitle', 'cover'])];

    }

    /**
     * Show the library
     *
     * @return String path to image
     */
    public function cover($book_id)
    {
        $cover = Book::find($book_id)->cover;
        $path = storage_path("/app/public/book-covers/{$cover}");
        return Image::make($path)->response();
    }
}
