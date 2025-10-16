<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'Chintya Hairulina', 'email' => 'chin@example.com', 'country' => 'USA'],
            ['name' => 'Ilham Muzaki', 'email' => 'zak@example.com', 'country' => 'UK'],
            ['name' => 'Faisal', 'email' => 'fais@example.com', 'country' => 'Japan'],
            ['name' => 'Aldi Taher', 'email' => 'ald@example.com', 'country' => 'Spain'],
            ['name' => 'Budi Santoso', 'email' => 'budi@example.com', 'country' => 'Indonesia'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
