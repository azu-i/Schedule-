<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use Carbon\Carbon;

class CalendarController extends Controller
{
    //
    public function show(){
		
		$calendar = new CalendarView(time());
		// $carbon = new Carbon();
		
		$carbon = Carbon::now();
	
		return view('home/home',[
			'calendar' => $calendar,
			'carbon' => $carbon
			
		]);
    }
}
