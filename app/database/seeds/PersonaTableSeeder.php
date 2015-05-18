<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PersonaTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('personas')->insert(array(

			'nickname' => 'chamo',
			'email' => 'abachadi@gmail.com',
			
			));
	}

}