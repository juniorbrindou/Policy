<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        $faker = Faker\Factory::create('Fr_fr');
        for ($i = 0; $i < 10; $i++) {
            User::create([
            	'name'=>$faker->firstName,
            	'email'=>$faker->email,
            	'password'=>Hash::make('123456')
            ]);
        }
    }
}
