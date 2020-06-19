<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aviso extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'avisos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo', 'descripcion', 'precio', 'id_categoria', 'direccion', 'localidad', 'cocina', 'dormitorios', 'banios', 'gastos', 'lat', 'lng'];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }

    public function foto()
    {
        return $this->hasMany(Foto::class);
    }

}
