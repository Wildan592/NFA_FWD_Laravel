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

    // Show
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Author not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Author retrieved successfully",
            "data" => $author
        ], 200);
    }

    // Update
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Author not found"
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:100',
            'email' => 'sometimes|required|email|unique:authors,email,' . $id
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $author->update($request->all());

        return response()->json([
            "success" => true,
            "message" => "Author updated successfully",
            "data" => $author
        ], 200);
    }

    // Destroy
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Author not found"
            ], 404);
        }

        $author->delete();

        return response()->json([
            "success" => true,
            "message" => "Author deleted successfully"
        ], 200);
    }
}
