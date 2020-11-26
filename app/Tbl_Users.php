<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbl_Users extends Model
{
   protected $table = 'users';   // 'user' DB name  
   public $timestamps = false;

   protected $fillable = ['full_name', 'ADID', 'email', 'password'];
   protected $dates = ['email_verified_at' , 'created_at', 'updated_at'];
}
