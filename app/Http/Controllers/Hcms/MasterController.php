<?php

namespace App\Http\Controllers\Hcms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function department()
    {
        return view('hcms.department');
    }   

    public function department_add()
    {
        return view('hcms.department_form');
    }       

    public function divisi()
    {
        return view('hcms.divisi');
    }     

    public function jabatan()
    {
        return view('hcms.jabatan');
    }      
}
