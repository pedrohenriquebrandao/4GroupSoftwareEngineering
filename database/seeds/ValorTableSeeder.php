<?php

use Illuminate\Database\Seeder;
use App\Valor;
Use Faker\Factory as Faker;

class ValorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtor_valor')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Valor::create([
                'quilo' => $faker->randomFloat(8, 0, 2),
                'quilo_ promocao' => $faker-> randomFloat(8, 0, 2),
                'unidade'=> $faker-> randomFloat(8, 0, 2),
                'unidade_promocao' => $faker-> randomFloat(8, 0, 2),
                'caixa'=> $faker-> randomFloat(8, 0, 2),
                'caixa_promocao'=> $faker-> randomFloat(8, 0, 2),
            ]);
        }
    }
}
