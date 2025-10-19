<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Buku yang menceritakan adegan aksi dan petualangan seru'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Genre yang berfokus pada kisah cinta dan emosi antar tokoh'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Cerita yang menampilkan dunia imajinatif penuh sihir dan makhluk mistis'
        ]);

        Genre::create([
            'name' => 'Thriller',
            'description' => 'Genre penuh ketegangan dan kejutan dalam alur cerita'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'description' => 'Genre dengan unsur humor dan hiburan ringan'
        ]);
    }
}
