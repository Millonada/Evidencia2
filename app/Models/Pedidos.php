<?php

namespace App\Models;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedidos extends Model
{
    use HasFactory;

    protected $fillable=[
        "idProducto",
        "cantidad",
        "precio",
        "total",
        "estatus" 
    ];
    /**
     * Get all of the producto for the Pedidos
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function producto()
    {
        return $this->belongsTo(Productos::class,'idProducto');
    }
}
