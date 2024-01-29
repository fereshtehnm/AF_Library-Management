<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function borrow(Request $request, Book $book)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Validate the request data (you may add more validation rules)
            $request->validate([
                'return_date' => 'required|date',
            ]);

            // Append to the reports table
            Report::create([
                'reserve_data' => now(),
                'return_date' => $request->input('return_date'),
                'book_id' => $book->id,
                'user_id' => Auth::id(),
            ]);

            $request->session()->flash('success', 'Book borrowed successfully.');

            return redirect()->route('index')->with('success', 'Book borrowed successfully.');
        }

        // Redirect the user to the login page if not authenticated
        return redirect()->route('login')->with('error', 'Please log in to borrow a book.');
    }
}
