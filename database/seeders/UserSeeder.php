<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
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
            'name' => 'Sensei',
            'userIsTeacher' => 1,
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([
            'name' => 'Master',
            'userIsTeacher' => 1,
            'email' => 'teacher2@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
