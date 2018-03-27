<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Company;
use Faker\Factory;
class branchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's truncate our existing records to start from scratch.
        // \App\Branch::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few companies in our database:
        for ($i = 0; $i < 15; $i++) {
            Branch::create([
                'address'	=>$faker->address,
                'phone'	=>$faker->phoneNumber,
		        'lat'	=>	$faker->latitude,
		        'lng'	=>	$faker->longitude,
		        'company_id'	=>	 Company::all()->random()->id,
            ]);
        }  
    }
}
