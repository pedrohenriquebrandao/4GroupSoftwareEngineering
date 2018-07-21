<?php

use Illuminate\Database\Seeder;
use App\Login;
use Faker\Factory as Faker;

class LoginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consumidor_login')->truncate();

        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Login::create([
                'email' => $faker->freeEmail(),
                'password' => $faker->password()
            ]);
        }
    }
}
