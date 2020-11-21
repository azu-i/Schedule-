<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'user_id' => 'required',
        'image_path' => 'required',
        'user_birthday'=> "required",
    );
}
  
