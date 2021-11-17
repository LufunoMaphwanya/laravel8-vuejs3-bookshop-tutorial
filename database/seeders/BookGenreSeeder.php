<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\Book;
use App\Models\Genre;

class BookGenreSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        $books = Book::all();
        $genres = Genre::all();

        collect($books)->each(function ($book, $key) use($genres) {

            $random_genre_ids = [
                rand(1,$genres->count()-1),
                rand(1,$genres->count()-1),
                rand(1,$genres->count()-1),
                rand(1,$genres->count()-1)
            ];

            collect($random_genre_ids)->unique()->each(function ($genre_id, $key) use($genres, $random_genre_ids, $book) {
                DB::table('book_genre')->insert([
                    'book_id' => $book->id,
                    'genre_id' => $genres[$genre_id]->id,
                ]);
            });
        });
    }
}
