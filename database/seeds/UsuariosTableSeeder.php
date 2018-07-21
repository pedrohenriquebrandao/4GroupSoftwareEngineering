<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use Faker\Factory as Faker;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumidor_usuarios')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Usuario::create([
                'cpf' => $faker->ean13(),
                'nome' => $faker->name(),
                'sexo'=> $faker->title(),
                'telefone' => $faker->randomNumber(9),
                'login_id' => $faker->randomDigitNotNull()
            ]);
        }

    }
}
