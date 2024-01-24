<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function show() {
        return view("book.index");
    }
}
