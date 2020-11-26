<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_post extends Model
{
	protected $table = 'table_post'; 
    protected $fillable = ['title', 'body'];
    protected $dates = ['created_at', 'updated_at'];
}
