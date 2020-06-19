<?php

use Illuminate\Database\Seeder;
use App\Site;
use Faker\Generator as Faker;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $records = 10;

        for ( $i = 0; $i < $records; $i++ ) { 
            
            $newSite = new Site();
            $newSite->domain_name = $faker->domainName;
            $newSite->domain_word = $faker->domainWord;
            $newSite->url = $faker->url;
            $newSite->ipv4 = $faker->ipv4;
            $newSite->mac_address = $faker->macAddress;
            $newSite->save();
        }
    }
}
