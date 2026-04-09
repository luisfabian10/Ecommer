<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'categoria_id'
    ];
    
    //Relacion uno a muchos inversa de Subcategorias a Categoria
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    //Relacion uno a muchos de Subcategoria a Productos
    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
