<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Page;

use App\Models\Unit;
use App\Models\User;
use App\Models\Point;
use App\Models\Author;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'master',
            'userIsAdmin' => 1,
            'email' => 'master@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'student1',
            'email' => 'student1@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'student2',
            'email' => 'student2@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'mike',
            'email' => 'student3@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'hansen',
            'email' => 'student4@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'naruto',
            'email' => 'student5@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'sasuke',
            'email' => 'student6@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'Mochi',
            'email' => 'student7@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'name' => 'teacher1',
            'userIsTeacher' => 1,
            'email' => 'teacher1@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'teacher2',
            'userIsTeacher' => 1,
            'email' => 'teacher2@gmail.com',
            'password' => Hash::make('12345')
        ]);

        Author::create([
            'name' => 'Devin Wong'
        ]);
        Author::create([
            'name' => 'Hasna Chan'
        ]);
        Author::create([
            'name' => 'Hansen'
        ]);
        Author::create([
            'name' => 'Mikey Gozal'
        ]);

        Unit::create([
            'Content' => 'Greeting people and Introducing yourself',
            'color' => '#58CC02'
        ]);
        Unit::create([
            'Content' => 'Asking for direction and get around the city',
            'color' => '#CE82FF'
        ]);
        Unit::create([
            'Content' => 'Order food and drink',
            'color' => '#00CD9C'
        ]);

        Point::create([
            'unit_id' => 1
        ]);
        Point::create([
            'unit_id' => 1
        ]);
        Point::create([
            'unit_id' => 1
        ]);
        Point::create([
            'unit_id' => 1
        ]);
        Point::create([
            'unit_id' => 2
        ]);
        Point::create([
            'unit_id' => 2
        ]);
        Point::create([
            'unit_id' => 2
        ]);
        Point::create([
            'unit_id' => 2
        ]);
        Point::create([
            'unit_id' => 3
        ]);
        Point::create([
            'unit_id' => 3
        ]);
        Point::create([
            'unit_id' => 3
        ]);
        Point::create([
            'unit_id' => 3
        ]);

        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-1',
            'pointxp' => 10,
            'correction' => 'こんにちわ (konnichiwa)'
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-2',
            'pointxp' => 10,
            'correction' => ''
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-3',
            'pointxp' => 10,
            'correction' => 'なまえ(namae)'
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-4',
            'pointxp' => 10,
            'correction' => 'Nice to meet you'
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-5',
            'pointxp' => 10,
            'correction' => 'See you tomorrow, Chris'
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-6',
            'pointxp' => 10,
            'correction' => 'Ken is a kind guy'
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-7',
            'pointxp' => 10,
            'correction' => ''
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-8',
            'pointxp' => 10,
            'correction' => 'の (no)'
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-9',
            'pointxp' => 10,
            'correction' => 'Good evening, my name is Chris'
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 2,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 3,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 4,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 5,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 6,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 7,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 8,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 9,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 10,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 11,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);
        Page::create([
            'point_id' => 12,
            'page_name' => 'question1-10',
            'pointxp' => 10,
            'correction' => 'He is Chris\'s brother, Ken'
        ]);

        $this->call(ArticleSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
    }
}
