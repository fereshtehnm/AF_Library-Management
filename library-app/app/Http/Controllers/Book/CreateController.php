<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class CreateController extends Controller
{
    public function create()
    {
        return view('Book.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|unique:books|max:255',
            'description' => 'required|string|min:10',
            'categories' => 'required|string',
            'price' => 'required|numeric',
            'author' => 'required|string',
            'quantity' => 'required|numeric'
        ]);

        // Create a new staff instance
        // $books = new Book([
        //     'name' => $request->input('name'),
        //     'description' => $request->input('description'),
        //     'categories' => $request->input('categories'),
        //     'price' => $request->input('price'),
        //     'author' => $request->input('author'),
        //     'quantity' => $request->input('quantity')
        // ]);
        $books = Book::create([
            'name' => $request->name,
            'description' => $request->description,
            'categories' => $request->categories,
            'price' => $request->price,
            'author' => $request->author,
            'quantity' => $request->quantity,
        ]);
        $books->save();
        return redirect()->route('book');
    }
    public function index()
    {
        $books = Book::get();
        // You can leave this method empty or redirect to another route if needed
        return view('book.index', compact('books'));
    }
}

