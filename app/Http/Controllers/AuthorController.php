<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        $data = new Author();
        $atuhors = $data->getAuthors();
        
        return view('authors', ['authors' => $atuhors]);
    }
}
