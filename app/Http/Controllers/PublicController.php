<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function chiSiamo(){
        
        return view('chisiamo');
    }
}
