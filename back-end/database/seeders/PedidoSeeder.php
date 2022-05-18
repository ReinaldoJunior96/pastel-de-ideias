<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<10; $i++){
            Pedido::create([
                'codCliente' => random_int(1,10),
                'codProduto'=> random_int(1,10),
            ]);
        }
    }
}
