<?php

namespace App\Http\Controllers;
use App\Models\Book as ModelsBook;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = ModelsBook::all();
        return response()->json($books, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'publication_year' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|string',
            'publishedDate' => 'required|string',
            'language' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'neighborhood' => 'required|string'

        ]);

        $book = ModelsBook::create($validatedData);

        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $book = ModelsBook::find($id);

        if (!$book) {
            return response()->json(['message' => "book not found", 404]);
        }

        return response()->json($book, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = ModelsBook::find($id);

        if (!$book) {
            return response()->json(['message' => "book not found", 404]);
        }

        $book->delete();

        return response()->json(['message' => 'book deleted']);
    }
}
