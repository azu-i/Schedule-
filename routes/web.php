<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/pareja','homeController@home')->middleware('auth');

Route::get('/', 'CalendarController@show')->middleware('auth');
Route::get('/showPlan','PlanController@planHistory')->middleware('auth');

Route::get('/plan','PlanController@getPlan')->middleware('auth');
Route::post('/plan','PlanController@postPlan')->middleware('auth');
Route::get('/plan','PlanController@planHistory')->middleware('auth');
Route::get('/plan/delete', 'PlanController@delete')->middleware('auth');

Route::post('/detail','DetailsController@detailpost')->middleware('auth');

Auth::routes();

Route::get('/home', 'homeController@index')->name('home');

