<?php

use Illuminate\Database\Seeder;
use App\Produtor;
use Faker\Factory as Faker;

class ProdutorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtores')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Produtor::create([
                'nome' => $faker->name(),
                'cnpj' => $faker->ean13(),
                'endereco_id' => $faker->randomNumber(2),
                'login_id' => $faker->randomNumber(2)
            ]);
        }
    }
}
