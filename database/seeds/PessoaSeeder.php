<?php

use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(teste\Pessoa::class, 5)->create();
    }
}

 /*     for($i =0; $i<5; $i++)
       	DB::table('pessoas')->insert(['nome' => $faker->firstName,
       	                              'sobrenome' => $faker->lastName,
       	                              'telefone' => $faker->phoneNumber,
       	                              'idade' => $faker->numberBetween(18, 65)]);*/