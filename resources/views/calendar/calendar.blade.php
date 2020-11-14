@extends('layouts.layout')


@section('title','home')

@section('content')
<div class = "container mt-5">
   <div class = "row justify-content-center">
       <div class = "col-md-8">
           <div class="calendar">
                <form class="prev-next-form"></form>
                <table class="table" width="100%">
                    <tr>
                        <td colspan="2">
                            <a id="p" class="btn btn-secondary" href="{{ action("CalendarController@show", ['year' => $prevYear, 'month' => $prevMonth]) }}">Previous</a>
                        </td>
                        <th colspan="3">
                            <div class="text-center">
                                {{ $now->year }}年{{ $now->month}}月
                            </div>
                        </th>
                        <td colspan="2">
                            <div class="text-right">
                                <a class="btn btn-secondary" href="{{ action("CalendarController@show", ['year' => $nextYear, 'month' => $nextMonth]) }}">Next</a>
                            </div>
                        </td>
                    </tr>
                </table>
               <table class = "table table-bordered">
					{!!$calendar->render()!!}
               </table>
               <a href="{{ url('/plan') }}">予定設定</a>
           </div>
       </div>
   </div>
</div>

@endsection