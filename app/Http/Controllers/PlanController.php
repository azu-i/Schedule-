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
        
        $plan -> day = $request-> day;
        $plan -> event_name = $request -> event_name;
        $plan -> detail = $request -> detail;
        
        unset($form['_token']);
        $plan -> fill($form);
        $plan -> save();
     
        return redirect("");
    }

    public function planHistory(Request $request){
        $search = $request -> search;
        if($search != ''){
            $posts = Plan::where('event_name',$search) -> get();  
        }else{
            $posts = Plan::all();
        }
        return view('calendar.plan',['posts'=>$posts, 'search'=>$search]);
    }

    public function delete(Request $request){
        $plan = Plan::findOrFail($request->id);
        $plan -> delete();
        return redirect('/plan');
    }

    public function calendarPlanStock(Request $request){
        
    }
}