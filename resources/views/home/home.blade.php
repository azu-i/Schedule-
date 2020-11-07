@extends('layouts.layout')


@section('title','home')


@section('content')
<div class = "container mt-5">
   <div class = "row justify-content-center">
       <div class = "col-md-8">
           <div class="calendar">
              <form class = "prev-next-form"></form>
               <table class = "table">
                  <tr>
                     <td colspan = "2">
                        <button class = "btn btn-outline-secondary prev-next-btn" data-month = "{{ $current_month->m->add(-1, 'month')->format('Y-m') }}"><</button>
                     </td>
                      <th colspan="3">
                            <div class="text-center">
                                {{ $$current_month->Y}} {{ $$current_month->m}}
                                
                            </div>
                        </th>
                        <td colspan="2">
                            <div class="text-right">
                                <button class="btn btn-outline-secondary prev-next-btn" data-month="{{ $current_month->m->add(1, 'month')->format('Y-m') }}">></button>
                            </div>
                        </td>
                  </tr>
               </table>
               <div class = "card-body">
					{!!$calendar -> render() !!}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection