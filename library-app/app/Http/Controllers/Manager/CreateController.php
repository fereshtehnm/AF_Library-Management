<?php

namespace App\Http\Controllers\Manager;

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
        $staff->assignR
        // Save the staff record
        $staff->save();

        // Redirect to a success page or perform other actions as needed
        return redirect()->route('staff.index')->with('success', 'Staff created successfully');
    }
}
