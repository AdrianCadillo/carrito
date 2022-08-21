<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
   protected $table ="productos";

   protected $fillable =[
       'descripcion',
       'precio',
       'stock'
   ];

   protected $primaryKey="id_producto";

   protected $guarded = "id_producto";

   public $timestamps = false;
}
