<?php

namespace App\Http\Controllers;

use App\Models\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all(); // Adjust this query based on your needs
        return view('report.index', compact('report'));
    }
}