<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'Lufuno Maphwanya',
            'Kevin Reynolds',
            'Arthur Pinky',
            'Boruc Adams',
            'Stephen David',
            'Brown Adeyemi',
            'Pride Chigumira',
            'Thomas Fredson'
        ];

        collect($users)->each(function ($user, $key) {
            DB::table('users')->insert([
                'name' => $user,
                'email' => strtolower(str_replace(" ", "", $user)).'@gmail.com',
                'password' => Hash::make('password'),
            ]);
        });

        collect(['1', '2', '3', '4', '5'])->each(function ($user, $key) { // dumb i know
            DB::table('users')->insert([
                'name' => 'John-'. $user . ' Smith',
                'email' => "user".strval($user).'@gmail.com',
                'password' => Hash::make('password'),
            ]);
        });
    }
}
