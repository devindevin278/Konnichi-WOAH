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
            'name' => 'Devin'
        ]);
        Author::create([
            'name' => 'Hasna'
        ]);
        Author::create([
            'name' => 'Hansen'
        ]);
        Author::create([
            'name' => 'Mike'
        ]);
    }
}
