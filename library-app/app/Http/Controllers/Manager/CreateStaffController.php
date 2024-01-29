<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CreateStaffController extends Controller
{
    public function User(){
        $users = User::get();
        return view('', compact('users'));
    }

    public function assignRole(User $user){
        $user->assignRole('staff');
        return redirect()->back();
    }

    public function removeRole(User $user){
        $user->removeRole('staff');
        return redirect()->back();
    }
}
