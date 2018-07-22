<?php

use Illuminate\Database\Seeder;
use App\Assinatura;
use Faker\Factory as Faker;

class AssinaturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumidor_assinatura')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Assinatura::create([
                'dataDeAssinatura' => $faker->creditCardExpirationDateString(),
                'preco' => $faker->randomFloat(2, 0, 8),
                'status' => $faker->word(),
                'login_id' => $faker->randomNumber(2)
            ]);
        }
    }
}
