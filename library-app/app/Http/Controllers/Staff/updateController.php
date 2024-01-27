<?php

// app/Http/Controllers/Staff/UpdateController.php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);

        $request->validate([
            'name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email|unique:staff,email,' . $id,
        ]);

        $staff->update($request->all());
        $staff->save();

        return redirect()->route('staff')->with('success', 'Staff updated successfully');
    }
}
