<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insert data ke tabel news
        News::insert([
            'image' => 'serenTaun.jpg',
            'title' => 'Seren Taun',
            'content' => 'Seren Taun adalah upacara adat panen padi masyarakat Sunda yang dilakukan setiap tahun. Upacara ini berlangsung khidmat dan semarak di berbagai desa adat Sunda. Upacara adat sebagai syukuran masyarakat agraris.',
            'writer' => 'Masnun Muhaemin'
        ]);

        News::insert([
            'image' => 'sembilanGordang.jpg',
            'title' => 'Fungsi Gordang Sambilan Sebelum Masyarakat Mandailing Kenal Islam',
            'content' => 'Gordang Sambilan saat itu juga dipergunakan untuk menggelar upacara mangido udan (meminta hujan) untuk mengatasi kekeringan yang melanda di daerah tersebut.',
            'writer' => 'Kevin Julio'
        ]);

        News::insert([
            'image' => 'batikNasional.jpg',
            'title' => 'Hari Batik Nasional 2 Oktober, Mari Lebih Mengenal Batik',
            'content' => 'Batik merupakan salah satu jenis karya seni rupa yang berkembang di Indonesia. Batik sendiri dipercaya sudah ada sejak zaman Majapahit dan populer pada akhir abad XVIII atau permulaan abad XIX.',
            'writer' => 'Kemot'
        ]);
    }
}