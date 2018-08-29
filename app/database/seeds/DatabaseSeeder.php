<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('UserTableSeeder');
		$this->call('TypeContactTableSeeder');
		$this->call('TypePhoneTableSeeder');

		//este codigo reinicia el autoincrement
		//DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
