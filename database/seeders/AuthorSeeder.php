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
        Author::create([
            'name' => 'Chintya Hairulina',
            'email' => 'chin@example.com'
        ]);

        Author::create([
            'name' => 'Ilham Muzaki',
            'email' => 'zak@example.com'
        ]);

        Author::create([
            'name' => 'Faisal',
            'email' => 'fais@example.com'
        ]);

        Author::create([
            'name' => 'Aldi Taher',
            'email' => 'ald@example.com'
        ]);

        Author::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com'
        ]);
    }
}
