<?php

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
    	for($i = 0; $i < 10; $i++)
        	DB::table('produtos')->insert([
        											'descricao' => "Big Big",
       	                              'preco' => 0.2,
       	                              'quantidade' => 10
       	                              ]);
    }
}
