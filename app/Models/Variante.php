<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variante extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'imagen_path',
        'producto_id'
    ];

    //Relacion uno a muchos inversa de Variantes a producto
    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    /*Relacion de muchos a muchos de Variante a Caracteristicas; 
    Con el metodo withTimestamps para que se guarden los campos created_at y updated_at en la tabla pivote*/
    public function caracteristicas(){
        return $this->belongsToMany(Caracteristica::class)
                    ->withTimestamps();
    }
}
