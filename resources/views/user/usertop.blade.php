@extends('layouts.layout')

@section('title','My Page')

@section('content')
    <div class="index-content">
        <div class="books-list">
            <div class-"books-list_title mypage-color">
                マイページトップ
            </div>
            <div class="book-table">
                <div class="book-table_list">
                    <div class="book-table_list--detail">
                         title:            <span>{{ $auth->name }}</span>
                         email:            <span>{{ $auth->email }}</span>
                         
                    </div>           
                </div>
            </div>
        </div>    
    </div>

{{ csrf_field() }}
@endsection