<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('adm_administrador')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Admin::create([
                'email' => $faker->email(),
                'password' => $faker->password(),
                'nome' => $faker->name(),
                'telefone' => $faker->randomNumber(8),
                'tipo' => $faker -> word()
            ]);
        }
    }
}
