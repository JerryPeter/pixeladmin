<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function dashboard()
    {
        return view('core.dashboard');
    }     

    public function profile()
    {
        return view('core.profile');
    }     
}
