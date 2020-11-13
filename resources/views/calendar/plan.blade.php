@extends('layouts.layout')


@section('title','Plan')


@section('content')
<div class = "container mt-5">
    <div class = "row">
        <div class = "col-md-8 mx-auto">
            <h2>予定登録</h2>
            <form action="{{ action('PlanController@postPlan') }}" method="post" enctype="multipart/form-data">
            <form  method = "POST"> 
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2">予定名　※</label>
                    
                    <div  class="col-md-10">
                        <script src="bootstrap-select.js"></script>
                            <select id="event_name" class="col-md-10">
                              <option data-thumbnail="path/to/cake.jpeg">誕生日</option>
                              <option data-thumbnail="path/to/food.jpeg">食事会</option>
                              <option data-thumbnail="path/to/hairsalon.jpeg">美容院</option>
                              <option data-thumbnail="path/to/beer.jpeg">飲み会</option>
                              <option data-thumbnail="path/to/calendar.jpeg">その他</option>
                            </select>
                            
                            <script>
                              $("#my-select").selectpicker();
                            </script>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">日付　※</label>
                    <div class="col-md-10">
                        <input type="date" value="<?php echo date('Y-m-d'); ?>"class="form-control" name="day">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">時間</label>
                    <div class="col-md-10">
           　　             <input type="time" class="form-control" name="time">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2">詳細</label>
                    <div class="col-md-10">
                       <textarea class="form-control" name="detail" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label>※は入力必須</label>
                </div>
                 {{ csrf_field() }}
                <input type="submit" class="form-group row btn btn-secondary" value="登録">
              
        
           </form>
            
        </div>
    </div>
</div>

@endsection