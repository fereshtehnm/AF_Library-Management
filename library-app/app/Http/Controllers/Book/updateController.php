<?php
// app/Http/Controllers/Book/UpdateController.php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class UpdateController extends Controller
{
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|unique:books,name,' . $id,
            'description' => 'required|string|min:10',
            'categories' => 'required|string',
            'price' => 'required|numeric',
            'author' => 'required|string',
            'quantity' => 'required|numeric',
        ]);

        // Find the book by ID
        $book = Book::findOrFail($id);

        // Update the book with the request data
        $book->update([
            'name' => $request->name,
            'description' => $request->description,
            'categories' => $request->categories,
            'price' => $request->price,
            'author' => $request->author,
            'quantity' => $request->quantity,
        ]);

        // Redirect to the book index page with success message
        return redirect()->route('book')->with('success', 'Book updated successfully');
    }
}
