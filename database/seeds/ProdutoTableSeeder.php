<?php

use Illuminate\Database\Seeder;
use App\Produto;
use Faker\Factory as Faker;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtor_produto')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Produto::create([
                'nome' => $faker->word(),
                'descricao' => $faker->text(),
                'tipo' => $faker->word(),
                'qtd_frete_gratis' => $faker->randomNumber(2),
                'imagem' => $faker->image(),
                'produtor_id' =>$faker->randomNumber(2)
            ]);
        }
    }
}
