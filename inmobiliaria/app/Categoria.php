<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  public function aviso(){
      return $this->hasMany(aviso::class,'id_categoria');
  }
}
