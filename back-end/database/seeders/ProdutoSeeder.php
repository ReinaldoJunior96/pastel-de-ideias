<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i<10; $i++){
            Produto::create([
                'nome' => $faker->name(),
                'preco'=> $faker->randomDigit(),
                'pathImg' => $faker->imageUrl(800,600),
            ]);
        }
    }
}
