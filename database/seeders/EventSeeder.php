<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Support\Str;
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
                "title" => "Wayang Kulit: An Ancient Shadow Puppetry Performance",
                "slug" => Str::slug("Wayang Kulit: An Ancient Shadow Puppetry Performance"),
                "description" => "Sebuah pertunjukan wayang kulit yang kuno dan misterius, menghadirkan cerita-cerita epik dari masa lampau dengan menggunakan bayangan dan suara yang memukau.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Batik Workshop: Unraveling Indonesia's Traditional Textile Art",
                "slug" => Str::slug("Batik Workshop: Unraveling Indonesia's Traditional Textile Art"),
                "description" => "Workshop batik yang memperkenalkan seni tekstil tradisional Indonesia, mengajarkan peserta cara membuat motif batik yang khas dan berharga.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Gamelan Night: Traditional Javanese Music Concert",
                "slug" => Str::slug("Gamelan Night: Traditional Javanese Music Concert"),
                "description" => "Konser musik Jawa tradisional yang mempesona, menampilkan alunan gamelan yang kaya dan memikat hati.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Pesta Rakyat: Celebrating Indonesian Cultural Diversity",
                "slug" => Str::slug("Pesta Rakyat: Celebrating Indonesian Cultural Diversity"),
                "description" => "Sebuah perayaan yang merayakan keberagaman budaya Indonesia dengan tarian, musik, makanan, dan aktivitas budaya lainnya.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Tari Saman: Exploring the Richness of Acehnese Dance",
                "slug" => Str::slug("Tari Saman: Exploring the Richness of Acehnese Dance"),
                "description" => "Menggali kekayaan budaya tari Aceh dengan pertunjukan tari Saman yang penuh semangat dan gerakan yang indah.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Ritual of Melasti: Cleansing Ceremony by the Sea",
                "slug" => Str::slug("Ritual of Melasti: Cleansing Ceremony by the Sea"),
                "description" => "Sebuah upacara penyucian yang dilakukan di tepi laut, mempersembahkan kebersihan dan kesucian dalam tradisi spiritual Indonesia.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Pasar Seni: Showcasing Indonesian Art and Craftsmanship",
                "slug" => Str::slug("Pasar Seni: Showcasing Indonesian Art and Craftsmanship"),
                "description" => "Pasar seni yang memamerkan keindahan seni dan kerajinan Indonesia, dari lukisan tradisional hingga kerajinan tangan unik.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Culinary Journey: Discovering the Flavors of Indonesian Cuisine",
                "slug" => Str::slug("Culinary Journey: Discovering the Flavors of Indonesian Cuisine"),
                "description" => "Perjalanan kuliner yang memperkenalkan ragam rasa dan masakan khas Indonesia, dari pedasnya rendang hingga manisnya klepon.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Kuda Lumping Spectacular: A Traditional Javanese Dance Performance",
                "slug" => Str::slug("Kuda Lumping Spectacular: A Traditional Javanese Dance Performance"),
                "description" => "Pertunjukan tari khas Jawa, kuda lumping, yang menampilkan keberanian dan kekuatan dalam gerakan yang mengagumkan.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Bunaken Marine Festival: Preserving Indonesia's Underwater Heritage",
                "slug" => Str::slug("Bunaken Marine Festival: Preserving Indonesia's Underwater Heritage"),
                "description" => "Sebuah festival laut yang bertujuan untuk melestarikan kekayaan bawah laut Indonesia di kawasan Bunaken, menampilkan keindahan alam bawah laut dan upaya pelestariannya.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
            [
                "title" => "Lontar Weaving Workshop: Exploring the Art of Balinese Palm Leaf Manuscript Crafting",
                "slug" => Str::slug("Lontar Weaving Workshop: Exploring the Art of Balinese Palm Leaf Manuscript Crafting"),
                "description" => "Sebuah workshop tenun lontar yang menggali seni pembuatan manuskrip dari daun lontar khas Bali, memperkenalkan peserta pada teknik-teknik tradisional dan keindahan karya seni yang dihasilkan.",
                "banner" => "-",
                "started" => "2024-01-08 19:17:05",
                "ended" => "2024-01-30 12:17:04",
                "fee" => 10000,
                "location" => "Kuningan",
                "for" => "all ages",
                "longitude" => "0",
                "latitude" => "0"
            ],
        ]);
    }
}
