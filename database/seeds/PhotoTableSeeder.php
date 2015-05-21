<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Photo;

class PhotoTableSeeder extends Seeder {
 
    public function run()
    {
 
        Eloquent::unguard();
 
        DB::table('photos')->delete();
 
        $faker = Faker\Factory::create();
 
        for($i = 0; $i < 200; $i++){
            Photo::create(array(
                'user_id' => $faker->numberBetween($min = 1, $max = 200),
                'movie_id' => $faker->numberBetween($min = 1, $max = 200),
                'photo_loc' => $faker->imageUrl($width = 180, $height = 240),
            ));
        }
 
    }
 
}
