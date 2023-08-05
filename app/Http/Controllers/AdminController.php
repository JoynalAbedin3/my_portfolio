<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
 
 

class AdminController extends Controller
{
    public function destroy(Request $request)  
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function profile(){
        
        $id = Auth::user()->id;
        $adminData = user::find($id); 

        return view('admin.admin_profile',compact('adminData'));
    }
}
