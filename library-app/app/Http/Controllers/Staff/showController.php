<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function show()
    {
        return view("staff.index");
    }
}
