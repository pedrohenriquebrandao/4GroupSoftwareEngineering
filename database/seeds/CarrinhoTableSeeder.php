<?php

use Illuminate\Database\Seeder;
use App\Carrinho;
use Faker\Factory as Faker;

class CarrinhoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumidor_carrinho')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Carrinho::create([
                'usuario_id' => $faker->randomDigitNotNull(),
                'produto_id' => $faker->randomDigitNotNull(),
            ]);
        }
    }
}
