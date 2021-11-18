<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            [ 'title' => 'Food: Food and drink' ],
            [ 'title' => 'Science & Technology: science, programming, technology ect.'],
            [ 'title' => 'History & Politics: polictics, philosophy ect'],
            [ 'title' => 'Finance'],
        ];

        collect($genres)->each(function ($genre, $key) {
            DB::table('genres')->insert([
                'title' => explode(':', $genre['title'])[0],
                'description' => explode(':', $genre['title'])[1] ?? null,
            ]);
        });
    }
}
