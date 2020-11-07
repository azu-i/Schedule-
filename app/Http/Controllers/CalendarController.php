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
		$current_month = date('Y-m-t');

		return view('home/home',[
			'calendar' => $calendar,
			'current_month' => $current_month
			
		]);
    }
}
