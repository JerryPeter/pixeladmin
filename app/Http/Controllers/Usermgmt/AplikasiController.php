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

    public function aplikasiDetail()
    {
        return view('usermgmt.aplikasi_detail');
    }    
    
    public function menu()
    {
        return view('usermgmt.menu');
    }  
    
    public function action()
    {
        return view('usermgmt.action');
    }     
}
