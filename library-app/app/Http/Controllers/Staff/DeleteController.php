<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete(Staff $staff){
        $staff->delete();
        return redirect()->back();
    }

}
