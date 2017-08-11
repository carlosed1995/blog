<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Carlos extends Model
{
    protected $table= 'producto';
    protected $primarykey= 'idproducto';
     protected $fillable= [

     'idproducto', 'nombre', 'apellido', 'precio','marksid'
     
     ];

}
