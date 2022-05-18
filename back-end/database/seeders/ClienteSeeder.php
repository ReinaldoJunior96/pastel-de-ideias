<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
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
            Cliente::create([
                'nome' => $faker->name(),
                'email'=> $faker->email(),
                'telefone' => $faker->phoneNumber(),
                'dataNascimento' => $faker->date(),
                'endereco' => $faker->address(),
                'complemento' => $faker->country(),
                'cep'=> $faker->postcode(),
            ]);
        }



    }
}
