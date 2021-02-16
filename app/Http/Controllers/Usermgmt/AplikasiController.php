<?php

namespace App\Http\Controllers\Usermgmt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AplikasiController extends Controller
{
    public function index()
    {
        return view('usermgmt.aplikasi');
    }  
}
