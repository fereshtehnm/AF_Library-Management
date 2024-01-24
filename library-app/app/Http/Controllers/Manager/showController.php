<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function show()
    {
        return view("manager.index");
    }
}
