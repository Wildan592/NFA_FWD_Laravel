<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'Laravel for Beginners', 'author_id' => 1, 'genre' => 'Programming', 'year_published' => 2022, 'price' => 150000],
            ['title' => 'Mastering PHP', 'author_id' => 2, 'genre' => 'Programming', 'year_published' => 2021, 'price' => 175000],
            ['title' => 'The Art of Code', 'author_id' => 3, 'genre' => 'Technology', 'year_published' => 2023, 'price' => 200000],
            ['title' => 'Creative Writing', 'author_id' => 4, 'genre' => 'Literature', 'year_published' => 2020, 'price' => 120000],
            ['title' => 'Pemrograman Web Modern', 'author_id' => 5, 'genre' => 'Programming', 'year_published' => 2024, 'price' => 180000],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
