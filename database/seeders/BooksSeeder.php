<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [ 'title' => 'The story of tea', 'cover' => 'tea.jpg' ],
            [ 'title' => 'The story of animals', 'cover' => 'animals.jpg'],
            [ 'title' => 'Programming made easy', 'cover' => 'programming.jpeg' ],
            [ 'title' => 'Cooking easy but delicious', 'cover' => 'cooking.jpeg' ],
            [ 'title' => 'Science is a joke' , 'cover' => 'science.jpeg'],
            [ 'title' => 'The planets and their meanings' , 'cover' => 'planets.jpeg'],
            [ 'title' => 'Origin of the Gods' , 'cover' => 'gods.png'],
            [ 'title' => 'Empire strikes' , 'cover' => 'science.jpeg'],
            [ 'title' => 'The taking of javascript' , 'cover' => 'javascrpt.jpg'],
            [ 'title' => 'Making money fast' , 'cover' => 'moneyfast.jpeg'],
            [ 'title' => 'Investment 201: Now you\'re better at moneyy' ,'cover' => 'investment2.jpeg'],
            [ 'title' => 'Investment 101: Introduction to the ropes' ,'cover' => 'investment1.jpeg'],
            [ 'title' => 'Investment 300: experts of the game','cover' => 'investment3.jpeg' ],
            [ 'title' => 'Failed states of Africa: Deep dive into.', 'cover' => 'africa.png' ],
            [ 'title' => 'Oil wars: Deep dive into.' ,'cover' => 'oilwars.jpeg'],
            [ 'title' => 'The fall of the Romans: Deep dive into.', 'cover' => 'roman.jpeg' ],
            [ 'title' => 'The fall of the Babylon: Deep dive into.' , 'cover' => 'babylon.jpg'],
            [ 'title' => 'The empire of the East: Deep dive into.' , 'cover' => 'eastern.jpeg'],
            [ 'title' => 'China: A david emerge inspite of Goliath.' , 'cover' => 'china.png']
        ];

        collect($books)->each(function ($book, $key) {
            DB::table('books')->insert([
                'title' => explode(':', $book['title'])[0],
                'subtitle' => explode(':', $book['title'])[0] ?? null,
                'cover' => $book['cover'],
                'summary' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ]);
        });
    }
}
