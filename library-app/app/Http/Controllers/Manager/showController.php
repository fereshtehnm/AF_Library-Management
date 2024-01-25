<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function show()
    {
    //     $staffs= Book::get();
        return view("manager.index");
    }
}
