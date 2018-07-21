<?php

use Illuminate\Database\Seeder;
use App\Cartao;
use Faker\Factory as Faker;

class CartaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumidor_cartao')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Cartao::create([
                'nome' => $faker->name(),
                'validade' => $faker->creditCardExpirationDateString(),
                'codCartao' => $faker->randomNumber(3),
                'numCartao' => $faker->creditCardNumber(),
                'login_id' => $faker->randomNumber(2)

            ]);
        }
    }
}
