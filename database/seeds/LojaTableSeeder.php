<?php

use Illuminate\Database\Seeder;
use App\Loja;
use Faker\Factory as Faker;

class LojaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtor_loja')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Loja::create([
                'cnpj' => $faker->ean8(),
                'nome' => $faker->word()
            ]);
        }
    }
}
