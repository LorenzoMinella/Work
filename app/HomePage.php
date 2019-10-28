<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $dates = ['deleted_at'];
    protected $table = 'home_page';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

   
   

}
