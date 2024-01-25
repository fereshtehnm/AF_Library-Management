<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $staff = Staff::paginate(10);
        return view("index", compact("staff"));
    }
}
