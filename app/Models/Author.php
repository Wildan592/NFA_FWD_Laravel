<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = 
        [
            [
                'id' => 1, 
                'name' => 'George Orwell'
            ],
            [
                'id' => 2,
                'name' => 'J.K. Rowling'
            ],
            [
                'id' => 3, 
                'name' => 'Haruki Murakami'
            ],
            [
                'id' => 4, 
                'name' => 'Jane Austen'
            ],
            [
                'id' => 5, 
                'name' => 'Stephen King'
            ],
        ];
     public function getAuthors(){
        return $this->authors;
    }
}
