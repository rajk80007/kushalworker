<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function admin_dashboard(Request $request)
    {
        $user = $request->username;
        $pass= $request->password;
        if($user == "admin" && $pass == "123rkkush")
        {
            $data = work::all();
            
            return view('admin.admin_dashboard',compact('data'));
        }
        else {
            return redirect()->back()->with('message', "Invalid Credentials. Please try again");
        }

    }
}
