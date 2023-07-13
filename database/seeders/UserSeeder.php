<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'userIsAdmin' => 1,
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
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 0,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'West Kalimantan',
            'city' => 'Pontianak',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher1.jpg',
            'descteacher' => 'Dapatkan pengalaman belajar bahasa Jepang terbaik sekarang juga!'
        ]);

        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher2@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'Bali',
            'city' => 'Denpasar',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher2.jpg',
            'descteacher' => 'Konnichiwa! Daftar sekarang!'
        ]);
        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher3@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 0,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'West Sumatra',
            'city' => 'Padang',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher3.jpg',
            'descteacher' => 'Pengajar berkualitas tinggi'
        ]);
        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher4@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'Jambi',
            'city' => 'Jambi',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher4.jpg',
            'descteacher' => 'Halo! Saya adalah seorang guru bahasa Jepang yang berdedikasi dan berpengalaman, dan saya ingin berbagi dengan Anda mengapa saya adalah pilihan yang tepat sebagai guru bahasa Jepang Anda.!'
        ]);
        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher5@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'Lampung',
            'city' => 'Bandar Lampung',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher5.jpg',
            'descteacher' => 'Saya memiliki pengalaman yang luas dalam mengajar bahasa Jepang kepada berbagai tingkat kemampuan, baik di kelas maupun secara pribadi. Saya telah menjadi guru bahasa Jepang selama lebih dari 10 tahun dan telah mengajar di berbagai lembaga pendidikan serta memberikan pelatihan bahasa Jepang kepada perusahaan-perusahaan'
        ]);
        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher6@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'East Java',
            'city' => 'Surabaya',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher6.jpg',
            'descteacher' => 'Saya memperoleh gelar sarjana dalam bidang Bahasa dan Sastra Jepang, serta memiliki sertifikasi dalam pengajaran bahasa Jepang sebagai bahasa asing. Saya terus mengikuti perkembangan terbaru dalam metode pengajaran dan materi pelajaran, sehingga dapat menyediakan pengalaman belajar yang terbaik bagi para siswa saya'
        ]);
        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher7@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'Banten',
            'city' => 'Serang',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher7.jpg',
            'descteacher' => 'Bahasa Jepang bukanlah bahasa ibu saya, tetapi saya telah menguasainya dengan baik. Saya memiliki keahlian dalam berkomunikasi dengan lancar dan dengan aksen yang jelas, sehingga siswa dapat mendengar dan mempraktikkan bahasa Jepang yang autentik'
        ]);
        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher8@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'Bengkulu',
            'city' => 'Bengkulu',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher8.jpg',
            'descteacher' => 'Saya percaya bahwa setiap siswa memiliki gaya belajar yang berbeda, dan saya berusaha untuk memahami kebutuhan dan tujuan setiap siswa secara individual'
        ]);
        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher9@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'South Sumatra',
            'city' => 'Palembang',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher9.jpg',
            'descteacher' => 'Saya selalu berusaha untuk membuat pelajaran saya menarik dan bervariasi. Saya menggunakan berbagai sumber daya seperti buku teks, materi audio-visual, permainan, dan kegiatan interaktif lainnya untuk membuat pembelajaran bahasa Jepang menjadi menyenangkan'
        ]);
        User::create([
            'name' => $faker->name(),
            'userIsTeacher' => 1,
            'email' => 'teacher10@gmail.com',
            'password' => Hash::make('12345'),
            'phoneNumber' => '08123456778',
            'gender' => 1,
            'DOB' => '2023-07-03',
            'address' => 'Jalan Achmad Yani',
            'province' => 'Central Java',
            'city' => 'Semarang',
            'price' => mt_rand(100000, 500000),
            'photo' => 'profile-images/teacher10.jpg',
            'descteacher' => 'Jika Anda mencari guru bahasa Jepang yang berdedikasi, berpengalaman, dan berorientasi pada hasil, saya siap membantu Anda mencapai tujuan bahasa Jepang Anda. Saya percaya bahwa dengan kerja keras dan bimbingan yang tepat, Anda dapat mencapai tingkat keahlian yang Anda inginkan.'
        ]);
    }
}
