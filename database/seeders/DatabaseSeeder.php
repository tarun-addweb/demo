<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\date::factory(10)->create();
$faker = Faker::create();
foreach(range(1,100) as $index)
{
    DB::table('dates')->insert([
        'name'=> $faker->name(),
        'created_at' => $faker->datetime(),
    ]);
}

    }
}
