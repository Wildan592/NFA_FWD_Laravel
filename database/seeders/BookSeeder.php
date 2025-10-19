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
       Book::create([
        'title' => 'Harry potter and the Sorcerer\'s Stone',
        'description' => 'An Orphaned boy enrolls in a scholl of wizardry',
        'price' => 50000,
        'stock'=> 50,
        'cover_photo' => 'harry.jpg',
        'genre_id' => 1,
        'author_id' => 1,
       ]);

       Book::create([
        'title' => 'The Shining',
        'description' => 'A Family heads to an isolated hoter for the winter where an evil and sinister',
        'price' => 25000,
        'stock'=> 30,
        'cover_photo' => 'shining.jpg',
        'genre_id' => 2,
        'author_id' => 2,
       ]);

       Book::create([
        'title' => 'Laskar Pelangi',
        'description' => 'An inspiring story about the struggle of a group of students and their two teachers in a remote village in belitung',
        'price' => 40000,
        'stock'=> 75,
        'cover_photo' => 'laskar.jpg',
        'genre_id' => 3,
        'author_id' => 3,
       ]);
    }
}
