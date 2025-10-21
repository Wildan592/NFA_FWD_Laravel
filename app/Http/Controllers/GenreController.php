<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    // READ - Get all data
    public function index()
    {
        $genres = Genre::all();

        if ($genres->isEmpty()) {
            return response()->json([
                "success" => false,
                "message" => "No genres found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "All genres retrieved successfully",
            "data" => $genres
        ], 200);
    }

    // CREATE - Add new data
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $genre = Genre::create($request->all());

        return response()->json([
            "success" => true,
            "message" => "Genre created successfully",
            "data" => $genre
        ], 201);
    }

    // Show
    public function show($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Genre not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Genre retrieved successfully",
            "data" => $genre
        ], 200);
    }

    // Update
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Genre not found"
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:100',
            'description' => 'sometimes|required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        $genre->update($request->all());

        return response()->json([
            "success" => true,
            "message" => "Genre updated successfully",
            "data" => $genre
        ], 200);
    }

    // Destroy
    public function destroy($id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Genre not found"
            ], 404);
        }

        $genre->delete();

        return response()->json([
            "success" => true,
            "message" => "Genre deleted successfully"
        ], 200);
    }
}
