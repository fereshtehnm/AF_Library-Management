<?php


namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Book $books)
    {
        $books->delete();
        return redirect()->back();
    }
}