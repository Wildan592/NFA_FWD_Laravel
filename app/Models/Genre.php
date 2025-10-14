<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
    
            [
                'id' => 1, 
                'name' => 'Fiction',
                'books' => 'Negeri 5 Menara'
            ],
            [
                'id' => 2, 
                'name' => 'Non-Fiction',
                'books' => 'Atomic Habits'
            ],
            [
                'id' => 3,
                'name' => 'Fantasy',
                'books' => 'Harry Potter'
            ],
            [
                'id' => 4, 
                'name' => 'Romance',
                'books' => 'Dilan 1990'
            ],
            [
                'id' => 5, 
                'name' => 'Horor',
                'books' => 'Malam Jumat Keliwon'
            ],
        ];
     public function getGenres(){
        return $this->genres;
    }

}
