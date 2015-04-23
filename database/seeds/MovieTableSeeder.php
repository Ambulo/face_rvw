<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Movie;

class MovieTableSeeder extends Seeder {
 
    public function run()
    {
 
        Eloquent::unguard();
 
        DB::table('movies')->delete();
 
        $faker = Faker\Factory::create();
 
        for($i = 0; $i < 200; $i++){
            Movie::create(array(
                'title' => $faker->sentence($nbWords = $faker->randomDigitNotNull),
                'year' => $faker->numberBetween($min = 1900, $max = 2015),
                'posterLoc' => $faker->imageUrl($width = 180, $height = 240),
            ));
        }
 
    }
 
}
