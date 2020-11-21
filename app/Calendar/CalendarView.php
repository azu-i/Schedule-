<?php
namespace App\Calendar;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CalendarView {
	
    
    protected function getWeeks(){
		$weeks = [];

		$firstDay = $this->carbon->copy()->firstOfMonth();
		$lastDay = $this->carbon->copy()->lastOfMonth();
		$week = new CalendarWeek($firstDay->copy());
		$weeks[] = $week;
		$tmpDay = $firstDay->copy()->addDay(7)->startOfWeek();
		while($tmpDay->lte($lastDay)){
			$week = new CalendarWeek($tmpDay, count($weeks));
			$weeks[] = $week;
			
			$tmpDay->addDay(7);
		}
		return $weeks;
	}

	private $carbon;

	public function __construct($now)
	{
		
		$this->carbon = (empty($now)) ? new Carbon : $now;
	}

	
     function calendar($month)
    {
        $dates = dates($month);
        $week = [];
        
        for ($i = 0; $i < count($dates); $i += 7) {
            $week = [];
            foreach (array_slice($dates, $i,7) as $date) {
            $week[] = $date;
            }
            yield $week;
        }
    }


	function render(){
		$html = [];
		$html[] = '<div class="calendar">';
		$html[] = '<table class="table table-bordered">';
		$html[] = '<thead>';
		$html[] = '<tr>';
		$html[] = '<th>Mon</th>';
		$html[] = '<th>Tue</th>';
		$html[] = '<th>Wed</th>';
		$html[] = '<th>Thu</th>';
		$html[] = '<th>Fri</th>';
		$html[] = '<th>Sat</th>';
        $html[] = '<th>Sun</th>';
		$html[] = '</tr>';
		$html[] = '</thead>';
		
		$html[] = '<tbody>';
		$weeks = $this->getWeeks();
		foreach($weeks as $week){
			$html[] = '<tr class="'.$week->getClassName().'">';
			$days = $week->getDays();
			foreach($days as $day){
				$html[] = '<td class="'.$day->getClassName().'">';
				$html[] = $day->render();
				$html[] = '</td>';
			}
			$html[] = '</tr>';
		}
		$html[] = '</tbody>';
	
		$html[] = '</table>';
		$html[] = '</div>';
		return implode("", $html);
	}
    
}