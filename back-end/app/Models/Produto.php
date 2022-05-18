<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'codCliente', 'codProduto'
    ];

    public function codCliente(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function codProduto(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }
}
