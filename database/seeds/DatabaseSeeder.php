<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarrinhoTableSeeder::class);
        $this->call(EnderecoTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(ProdutorTableSeeder::class);
        $this->call(CartaoTableSeeder::class);
        $this->call(ProdutoTableSeeder::class);
        $this->call(PunicaoTableSeeder::class);
        $this->call(ComentarioTableSeeder::class);
        $this->call(LojaTableSeeder::class);
        $this->call(RendaTableSeeder::class);
        $this->call(ValorTableSeeder::class);
        $this->call(AssinaturaTableSeeder::class);
        //$this->call(LoginTableSeeder::class);
        //$this->call(AdminTableSeeder::class);


    }
}
