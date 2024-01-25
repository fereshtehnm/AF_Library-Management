<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function show() {
        $books = Book::paginate(10);
        return view("index", compact("books"));
    }
}
