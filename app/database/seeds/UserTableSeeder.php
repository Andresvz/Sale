<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		\DB::table('users')->insert(array(

			'nombre' => 'totto',
			'email' => 'juan@totto.com',
			'password' => \Hash::make('123456'),
			'img' =>'img\carita.jpg',
			'ubicacion' =>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.3957671732096!2d-74.20072159391782!3d11.232269353884522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1ad0ae368759fac!2sTotto!5e0!3m2!1ses!2sus!4v1428385443427',
			'direccion' => 'calle falsa 123',
			'horario' => '8 am - 4 pm'
			));
	}

}