<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    use HasFactory;

    protected $fillable =[
        'valor',
        'descripcion',
        'opcion_id'
    ];
    
    //Relacion inversa de uno a muchos de caracteristicas a opcion
    public function opcion(){
        return $this->belongsTo(Opcion::class);
    }

    /*Relacion de muchos a muchos de caracteristica a variantes;
    Con el metodo withTimestamps para que se guarden los campos created_at y updated_at en la tabla pivote*/
    public function variantes(){
        return $this->belongsToMany(Variante::class)
                    ->withTimestamps();
    }
}
