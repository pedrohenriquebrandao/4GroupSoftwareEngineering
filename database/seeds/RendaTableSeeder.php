<?php

use Illuminate\Database\Seeder;
use App\Renda;
use Faker\Factory as Faker;

class RendaTableSeeder extends Seeder
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
            Renda::create([
                'mes' => $faker->date(),
                'total' => $faker->randomFloat(2, 0, 8),
                'lucro' => $faker->randomFloat(2, 0, 8)
            ]);
        }

    }
}
