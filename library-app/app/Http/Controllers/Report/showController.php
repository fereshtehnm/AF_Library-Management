<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class showController extends Controller
{
    public function show()
    {
        $reports = Report::paginate(10);
        return view("report.index", compact("reports")); // Fix the variable name to "reports"
    }
}
