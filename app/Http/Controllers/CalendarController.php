<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use Carbon\Carbon;

class CalendarController extends Controller
{
    //
    
	
    public function show(Request $request){
	
		if ($request->month == "") {
	            $year = Carbon::now()->year;
	            $month = Carbon::now()->month;
        } else {
	            $year = $request->year;
	            $month = $request->month;
          }
       

        $now = Carbon::create($year, $month);
       
        $nextYear =  Carbon::create($year, $month)->addMonthsNoOverflow()->year;
        $nextMonth = Carbon::create($year, $month)->addMonthsNoOverflow()->month;

        $prevYear = Carbon::create($year, $month)->subMonthNoOverflow()->year;
        $prevMonth = Carbon::create($year, $month)->subMonthNoOverflow()->month;
		$calendar = new CalendarView($now);
	   

		return view('calendar/calendar',[
			'calendar' => $calendar,
            'now' => $now,
            'nextYear' => $nextYear,
            'nextMonth' => $nextMonth,
            'prevYear' => $prevYear,
            'prevMonth' => $prevMonth,
		]);
    }
}
