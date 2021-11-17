<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\Book;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $random_content = [
            'Lorem ipsum dolor sit amet.',
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, ",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
        ];

        for ($x = 0; $x <= 1000; $x++) {
            DB::table('pages')->insert([
                'content' => str_repeat($random_content[rand(0,4)], rand(4,10)),
                'book_id' => Book::inRandomOrder()->first()->id
            ]);
          }
    }
}
