<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome','preco','pathImg'
    ];

    public function nome(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function preco(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function pathImg(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }



    public function pedido(){
        return $this->belongsTo(Pedido::class,'codPedido','id');
    }


}
