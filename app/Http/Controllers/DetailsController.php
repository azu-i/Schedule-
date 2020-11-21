<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DetailsController extends Controller
{
    //
    public function detailpost(){
        return view('auth/user_detail');
    }

}
