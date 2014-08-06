<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
			User::create([
				'username' => 'insta_admin',
				'email' => 'admin@instathreds.com',
				'password' => Hash::make('p@ssword1234'),
				'admin' => 1
			]);
		// }
	}

}
