<?php

use Illuminate\Database\Seeder;
use App\Comentario;
use Faker\Factory as Faker;

class ComentarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtor_comentario')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Comentario::create([
                'feedback' => $faker->sentence()
            ]);
        }
    }
}
