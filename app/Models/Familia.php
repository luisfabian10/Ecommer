<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;

     /* protected: Indica que esta propiedad solo puede ser usada dentro de este modelo o por clases que hereden de este modelo.
        fillable: Es un arreglo que define los campos que se pueden asignar de forma masiva 
                  al crear o actualizar un registro en la base de datos;
                  Esto es una medida de seguridad para evitar que se asignen campos no deseados o sensibles a través de formularios.*/
    protected $fillable = [
        'nombre'
    ];

    //Relacion uno a muchos de Familia a Categoria
    public function categorias(){
        return $this->hasMany(Categoria::class);
        
    }
}
