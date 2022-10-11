<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Article;
use App\Models\Article2;
use App\Models\Article3;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'nama_article' => 'Penyajian Data',
        ]);
        Article::create([
            'nama_article' => 'Mengapa data perlu disajikan?',
        ]);
        Article::create([
            'nama_article' => 'Menyajikan data variable kategori',
        ]);
        Article::create([
            'nama_article' => 'Diagram batang',
        ]);
        Article::create([
            'nama_article' => 'Diagram batang majemuk',
        ]);
        Article::create([
            'nama_article' => 'Diagram lingkar',
        ]);
        Article::create([
            'nama_article' => 'Diagram garis',
        ]);
        Article::create([
            'nama_article' => 'Quiz',
        ]);
        Article::create([
            'nama_article' => 'Congratulation',
        ]);

        
        Article2::create([
            'nama_article' => 'Penyajian data variabel kuantitatif',
        ]);
        Article2::create([
            'nama_article' => 'Stemplot',
        ]);
        Article2::create([
            'nama_article' => 'Pojok Latihan',
        ]);
        Article2::create([
            'nama_article' => 'Materi Tingkat Lanjut (Advanced)',
        ]);
        Article2::create([
            'nama_article' => 'Quiz',
        ]);
        Article2::create([
            'nama_article' => 'Quiz2',
        ]);
        Article2::create([
            'nama_article' => 'Quiz3',
        ]);
        Article2::create([
            'nama_article' => 'Congratulation',
        ]);

        Article3::create([
            'nama_article' => 'Histogram',
        ]);
        Article3::create([
            'nama_article' => 'Membuat Histogram',
        ]);
        Article3::create([
            'nama_article' => 'Memeriksa Distribusi',
        ]);
        Article3::create([
            'nama_article' => 'Quiz',
        ]);
        Article3::create([
            'nama_article' => 'Congratulation',
        ]);

  

        User::create([
            'nama' => 'Alvin Syahri',
            'asalkampus' => 'Politeknik Negeri Lhokseumawe',
            'password' => Hash::make(123123123),
            'nim' => '2020573010006',
            'role' => 2,
            'materi1' => 0

        ]);
        User::create([
            'nama' => 'Syah Syuri Alam',
            'asalkampus' => 'Politeknik Negeri Lhokseumawe',
            'password' => Hash::make(123123123),
            'nim' => '2020573010071',
            'role' => 1,
            'materi1' => 0

        ]);
        User::create([
            'nama' => 'M Tajul Munandar',
            'asalkampus' => 'Politeknik Negeri Lhokseumawe',
            'password' => Hash::make(123123123),
            'nim' => '2020573010031',
            'role' => 0,
            'materi1' => 0

        ]);
    }
}
