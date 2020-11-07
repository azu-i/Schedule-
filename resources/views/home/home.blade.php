@extends('layouts.layout')


@section('title','home')


@section('content')
<div class = "container mt-5">
   <div class = "row justify-content-center">
       <div class = "col-md-8">
           <div class="calendar">
                <form class="prev-next-form"></form>
                <table class="table" width="80%">
                    <tr>
                        <td colspan="2">
                            <button class="btn btn-outline-secondary prev-next-btn" data-month="{{ $carbon->addMonths(-1)}}"><</button>
                        </td>
                        <th colspan="3">
                            <div class="text-center">
                                {{ $carbon->year }}年{{ $carbon->month}}月
                                
                            </div>
                        </th>
                        <td colspan="2">
                            <div class="text-right">
                                <button class="btn btn-outline-secondary prev-next-btn" data-month="{{ $carbon->addMonths(1) }}">></button>
                            </div>
                        </td>
                    </tr>
                </table>
               <table class = "table table-bordered">
					{!!$calendar -> render() !!}
               </table>
           </div>
       </div>
   </div>
</div>
@endsection