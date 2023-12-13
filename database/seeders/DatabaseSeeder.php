<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // *USER seeder
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'),
            'role' => 'user'
        ]);
        User::create([
            'name' => 'Monkey D Dragon',
            'email' => 'Ddragon@gmail.com',
            'password' => Hash::make('dragon12345'),
            'role' => 'user'
        ]);
        User::create([
            'name' => 'Monkey D Lufy',
            'email' => 'Ddluffy@gmail.com',
            'password' => Hash::make('luffy12345'),
            'role' => 'user'
        ]);
        User::create([
            'name' => 'user 4',
            'email' => 'user4@gmail.com',
            'password' => Hash::make('user412345'),
            'role' => 'user'
        ]);
        User::create([
            'name' => 'user 5',
            'email' => 'user5@gmail.com',
            'password' => Hash::make('user512345'),
            'role' => 'user'
        ]);
        // **User
        // Post user 2/Dragon
        Post::create([
            'title' => 'Petualangan Dragon',
            'content' => 'Monkey D. Dragon,[9] juga dikenal sebagai "Dragon Pemberontak",[6] adalah yang terkenal Panglima Tertinggi (総司令官 Sōshireikan?)[5] dari Tentara Revolusioner, serta salah satu anggota pendirinya, dan mantan Kapten Pejuang Kemerdekaan.[10] Dia telah berusaha untuk menggulingkan Pemerintah Dunia dan diberi label "Penjahat Terburuk Dunia".[4] Dia adalah ayah dari Monkey D. Luffy dan putra dari Monkey D. Garp, lahir di Kerajaan Goa seperti mereka.[2] Dia juga bertanggung jawab untuk menyelamatkan hidup Sabo setelah yang terakhir hampir tenggelam dari serangan Bangsawan Dunia, akhirnya mengubah anak itu menjadi orang kedua.',
            'author' => 2,
            'published_date' => '2023-11-17',
            'status' => 'aktif'
        ]);
        // /Post
        // Post user 3/Luffy
        Post::create([
            'title' => 'Petualangan Luffy',
            'content' => 'Luffy lahir di Desa Foosha di East Blue. Ketika dia berusia tujuh tahun, dia bertemu dan berteman dengan kru bajak laut yang dipimpin oleh seorang kapten bernama Shanks Berambut Merah. Luffy terinspirasi untuk menjadi bajak laut oleh Shanks dan krunya.',
            'author' => 3,
            'published_date' => '2023-11-17',
            'status' => 'aktif'
        ]);
        // /Post
    }
}
