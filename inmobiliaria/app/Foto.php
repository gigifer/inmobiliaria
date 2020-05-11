<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
  protected $primaryKey = 'id';
  protected $fillable = ['ruta', 'aviso_id'];

  public function aviso(){
    return $this->belongsTo(aviso::class,'aviso_id');
  }
}
