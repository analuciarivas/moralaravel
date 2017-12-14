<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
  protected $fillable = [ 'colors'];
  public function talles ()
  {
    return $this->belongsToMany('App\Talle',"talles", 'id_color','id_talle');
  }
}
