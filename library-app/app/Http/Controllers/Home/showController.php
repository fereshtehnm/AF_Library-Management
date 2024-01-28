<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function index()
    {
        // Your index logic here
        return view('home.index'); // Assuming your view file is in the 'home' folder
    }
  
    public function show()
    {
        return redirect()->route('index');
    }
}
