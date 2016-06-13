<?php
use database\seeds\ContactsTableSeeder;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('CharacterVideoSeeder');
	}
=======
>>>>>>> fee241fc64ebc2df5f7a6d50f305e0a33acd0009

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    }
}
