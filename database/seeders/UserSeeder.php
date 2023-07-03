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
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 0,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'West Kalimantan',
            'city' => 'Pontianak',
            'price' => 100000,
            'photo' => 'profile-images/teacher1.jpg',
            'descteacher' => 'Dapatkan pengalaman belajar bahasa Jepang terbaik sekarang juga!'
        ]);

        User::create([
            'name' => 'Master',
            'userIsTeacher' => 1,
            'email' => 'teacher2@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'Bali',
            'city' => 'Denpasar',
            'price' => 200000,
            'photo' => 'profile-images/teacher2.jpg',
            'descteacher' => 'Konnichiwa! Daftar sekarang!'
        ]);
        User::create([
            'name' => 'Professor',
            'userIsTeacher' => 1,
            'email' => 'teacher3@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 0,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'West Sumatra',
            'city' => 'Padang',
            'price' => 300000,
            'photo' => 'profile-images/teacher3.jpg',
            'descteacher' => 'Pengajar berkualitas tinggi'
        ]);
        User::create([
            'name' => 'Master Sensei Turbo',
            'userIsTeacher' => 1,
            'email' => 'teacher4@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'Jambi',
            'city' => 'Jambi',
            'price' => 400000,
            'photo' => 'profile-images/teacher4.jpg',
            'descteacher' => 'Konnichiwa! Daftar sekarang!'
        ]);
    }
}
