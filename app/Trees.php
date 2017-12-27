<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trees extends Model
{
   public $timestamps = false;
  protected $fillable = ['name', 'height', 'stan', 'age']; //
}
