<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Author::create([
            'name' => 'devin'
        ]);
        Author::create([
            'name' => 'hasna'
        ]);
        Author::create([
            'name' => 'hansen'
        ]);
        Author::create([
            'name' => 'mike'
        ]);
    }
}
