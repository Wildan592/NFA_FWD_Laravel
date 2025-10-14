<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'pulang',
            'description' => 'Petualangan seseorang pemuda yang kembali ke desan kelahirannya',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' =>'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],
        [
            'title' => 'Sebuah seni untuk bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' =>'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ],
        [
            'title' => 'Naruto',
            'description' => 'Petualangan tentang seorang ninja konoha',
            'price' => 30000,
            'stock' => 55,
            'cover_photo' =>'naaruto.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ],
    ];

    public function getBooks(){
        return $this->books;
    }
}
