<?php
namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

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
        $books = new Book([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'categories' => $request->input('categories'),
            'price' => $request->input('price'),
            'author' => $request->input('author'),
            'quantity' => $request->input('quantity')
        ]);

        $books->save();

        return redirect()->route('book.index')->with('success', 'Book created successfully');
    }
    public function index()
    {
        // You can leave this method empty or redirect to another route if needed
        return view('book.index');
    }
}
