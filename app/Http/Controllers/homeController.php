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
    
    
    // public function getCalendarDates($year, $month)
    // {
    //     $dateStr = sprintf('%04d-%02d-01', $year, $month);
    //     $date = new Carbon($dateStr);
       
       
    //     $date->subDay($date->dayOfWeek);
        
    //     $count = 31 + $date->dayOfWeek;
    //     $count = ceil($count / 7) * 7;
    //     $dates = [];

    //     for ($i = 0; $i < $count; $i++, $date->addDay()) {
        
    //         $dates[] = $date->copy();
    //     }
    //     return redirect('home/home');
    // }
   
}
