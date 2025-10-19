<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    // READ - Get all data
    public function index()
    {
        $authors = Author::all();

        if ($authors->isEmpty()) {
            return response()->json([
                "success" => false,
                "message" => "No authors found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "All authors retrieved successfully",
            "data" => $authors
        ], 200);
    }

    // CREATE - Add new data
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:authors,email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $author = Author::create($request->all());

        return response()->json([
            "success" => true,
            "message" => "Author created successfully",
            "data" => $author
        ], 201);
    }
}
