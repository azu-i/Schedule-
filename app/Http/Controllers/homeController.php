<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class homeController extends Controller
{
    //
    public function home()
    {
        return view('home.home');
    }
    
   
}
