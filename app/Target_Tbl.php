<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target_Tbl extends Model
{
   protected $table = 'target_table';   // 'user' DB name  
   public $timestamps = false;

   protected $fillable = ['name', 'view_url', 'project_name'];
}
