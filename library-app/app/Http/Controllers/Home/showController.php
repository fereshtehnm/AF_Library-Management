<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;


class showController extends Controller
{
    public function index()
    {
        // Fetch books from the database
        $books = Book::paginate(10);

        // Pass books data to the view
        return view('home.index', compact('books'));
    }
  
    public function show()
    {
        return redirect()->route('index');
    }
}
  