<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Cliente extends Model
{
    use HasFactory, Notifiable, SoftDeletes;


    protected $fillable = [
        'nome', 'email', 'telefone', 'dataNascimento', 'endereco', 'complemento', 'cep'
    ];

    public function nome(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function email(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function telefone(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function dataNascimento(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function endereco(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function complemento(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }

    public function cep(): Attribute
    {
        return new Attribute(
            get: fn($value) => $value,
            set: fn($value) => $value,
        );
    }
    public function pedidos(){
        return $this->hasMany(Pedido::class, 'codCliente', 'id' );
    }



}
