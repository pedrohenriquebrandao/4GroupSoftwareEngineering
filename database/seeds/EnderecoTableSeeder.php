<?php

use Illuminate\Database\Seeder;
use App\Endereco;
use Faker\Factory as Faker;

class EnderecoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumidor_endereco')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Endereco::create([
                'rua' => $faker->streetName(),
                'bairro' => $faker->streetName(),
                'cep' => $faker->randomNumber(9),
                'numero' => $faker->buildingNumber(),
                'cidade' => $faker->city(),
                'estado' => $faker->state(),
                'complemento' => $faker->sentence(),
                'zona' => $faker->sentence(),
                'login_id' => $faker->randomDigitNotNull()
            ]);
        }
    }
}
