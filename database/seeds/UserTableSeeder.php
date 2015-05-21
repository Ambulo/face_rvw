<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {
 
    public function run()
    {
 
        Eloquent::unguard();
 
        DB::table('users')->delete();
 
        $faker = Faker\Factory::create();

        User::create(array(
            'name' => 'foobar',
            'email' => 'hi@me.com',
            'password' => Hash::make('password'),
        ));
 
 
        for($i = 0; $i < 199; $i++){
            User::create(array(
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => Hash::make($faker->name . $faker->year),
            ));
        }
 
    }
 
}
