<?php

use Illuminate\Database\Seeder;
use App\Punicao;
use Faker\Factory as Faker;

class PunicaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adm_punicao')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Punicao::create([
                'email_usuario' => $faker->name(),
                'email_administrador' => $faker->email(),
                'tipo' => $faker->word(),
                'data_inicial' => $faker->date(),
                'data_final' => $faker->date(),
                'descricao' => $faker->sentence()
            ]);
        }
    }
}
