<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'imagen_path',
        'precio',
        'subcategoria_id'
    ];
    
    //Relacion uno a muchos inversa de Productos a Subcategoria
    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class);
    }

    //Relacion uno a muchos de Producto a Variantes
    public function variantes(){
        return $this->hasMany(Variante::class);
    }

    /*Relacion Muchos a Muchos de productos a opciones, 
    para los campos adicionelas en la tabla pivote se usa el metodo withPivot, 
    con el nombre del campo adicional, en este caso valor, 
    y conTimestamps para que se guarden los campos created_at y updated_at en la tabla pivote*/
      
    public function opciones(){
        return $this->belongsToMany(Opcion::class)
                    ->withPivot('valor')
                    ->withTimestamps();
    }

}
