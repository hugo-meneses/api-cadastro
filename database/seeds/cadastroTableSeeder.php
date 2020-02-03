<?php

use Illuminate\Database\Seeder;
use App\cadastro;
class cadastroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      cadastro::create([
      'nome'=> 'Costa Silva',
      'posto'=> 'UPA24hs',
      'pais'=> 'Brasil',
      'id' => '1'
    ]);  
    }
}
