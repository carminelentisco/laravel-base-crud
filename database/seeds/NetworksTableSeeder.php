<?php

use Illuminate\Database\Seeder;
use App\Network;
use Faker\Generator as Faker;


class NetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $records = 10;

        for( $i = 0; $i < $records; $i++ ) {
            
            $newNetwork = new Network();

            $newNetwork->name =  $faker->name;
            $newNetwork->username = $faker->userName;
            $newNetwork->email = $faker->email;
            $newNetwork->password = $faker->password;
        
            $newNetwork->save();
        }
    }    
} 
