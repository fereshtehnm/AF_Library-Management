<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class editController extends Controller
{
    public function edit($id)
    {
        $books = Book::find($id);
        return view('book.edit', compact('books'));
    }
}
