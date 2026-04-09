<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tipo'
    ];
    
    /*Relacionmuchos a muchos de opciones a productos, 
    para los campos adicionelas en la tabla pivote se usa el metodo withPivot,
    con el nombre del campo adicional, en este caso valor, 
    y con withTimestamps para que se guarden los campos created_at y updated_at en la tabla pivote */
    public function productos(){
        return $this->belongsToMany(Producto::class)
                    ->withPivot('valor')
                    ->withTimestamps();
    }

    //Relacion uno a muchos de Opcion a Caracteristicas
    public function caracteristas(){
        return $this->hasMany(Caracteristica::class);
    }
}
