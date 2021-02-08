<?php

namespace App\Http\Controllers\Hcms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalController extends Controller
{

    public function attandance()
    {
        return view('hcms.attandance');
    }     
}
