<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Company;
use Faker\Factory;

class companiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // \App\Company::truncate();

        $faker = \Faker\Factory::create();


        // And now, let's create a few companies in our database:
        for ($i = 0; $i < 15; $i++) {
        $com = Company::create([
                'name' => $faker->company,
                'address'	=>$faker->address,
                'phone'	=>$faker->phoneNumber,
		        'description' => $faker->paragraph,
		        'main_image'	=>	"1H5LLpB3YtUvkpstFns3oaeIPF0pa8u3ONt7D3LCRqo3vxtLKCimg.jpg",
		        'category_id'	=>	 Category::all()->random()->id,
            ]);

    }
}
}
