<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\Book;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $random_comments = [
            'Lorem ipsum dolor sit amet.',
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, ",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
        ];

        collect($random_comments)->each(function ($comment, $key) use($random_comments) {
            DB::table('reviews')->insert([
                'comment' => $random_comments[rand(0,4)],
                'rating' => rand(1,5),
                'book_id' => Book::inRandomOrder()->first()->id
            ]);
        });
    }
}
