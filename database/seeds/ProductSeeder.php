<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
        	DB::table("products")->insert([
        		"name"=> $faker->name,
        		"price" => $faker->numberBetween(100, 10000)
        	]);
        }
    }
}
