<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class CalendarController extends Controller
{
    //
    public function show(){
		
		$calendar = new CalendarView(time());
		$month = new CarbonImmutable($month);

		return view('home/home',[
			'calendar' => $calendar,
			'month' => $month
			
		]);
    }
}
