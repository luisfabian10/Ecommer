<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'familia_id'
    ];

    //Relacion uno a muchos inversa de categorias a Familia
       public function familia(){
         return $this->belongsTo(Familia::class);
       }
   
    //Relacion uno a muchos de Categoria a Subcategorias
    public function subcategorias(){
        return $this->hasMany(Subcategoria::class);
    }   

}
