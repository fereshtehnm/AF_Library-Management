<?php
namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|unique:staff,email',
            'password' => 'required|min:8',
        ]);

        // Create a new staff instance
        $staff = new Staff([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $staff->save();

        return redirect()->route('staff.index')->with('success', 'Staff created successfully');
    }
    public function index()
    {
        // You can leave this method empty or redirect to another route if needed
        return view('staff.index');
    }

    
}
