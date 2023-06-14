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
            'name' => 'devin',
            'email' => 'student@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'hasna',
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

        // Storage::move('public/img/hanabi.png', 'public/post-images/hanabi.png');
        Article::create([
            'author_id' => '1',
            'title' => 'hi1',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);

        Article::create([
            'author_id' => '2',
            'title' => 'hi2',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi2',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);

        Article::create([
            'author_id' => '3',
            'title' => 'hi3',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi3',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);

        Article::create([
            'author_id' => '4',
            'title' => 'hi4',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi4',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);

        Article::create([
            'author_id' => '2',
            'title' => 'hi5',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi5',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
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

        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
    }
}
