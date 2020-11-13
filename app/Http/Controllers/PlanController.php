<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Plan;

class PlanController extends Controller
{
    //
    public function getPlan(Request $request)
    {
    
      
        return view("calendar.plan");
    }
    
    public function postPlan(Request $request)
    {
        $this->validate($request, Plan::$rules);
        
        $plan = new Plan();
        $form = $request->all();
        
        $plan -> day = $request->day;
        $plan -> event_name = $request -> event_name;
        
        unset($form['_token']);
        $plan -> fill($form);
        $plan -> save();
        
        
        return redirect("calendar/calendar");
    }
}