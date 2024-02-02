<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::insert([
            [
                "title" => "Ngerjain PR oleh Putri Ayudya dan Randhy Prasetya",
                "description" => "Pada sebuah pertemuan dua orang lama yang lama tak bertemu, mereka memperbincangkan hal yang lama-lama menjadi kesadaran tentang sesuatu yang sebenarnya sudah mereka ketahui sejak lama.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
            ],
            [
                "title" => "Ilham Good",
                "description" => "Pada sebuah pertemuan ilham hafidz yang istimewa",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
            ],
        ]);
    }
}
