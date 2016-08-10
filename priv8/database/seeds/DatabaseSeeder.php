<?php

use Illuminate\Database\Seeder;

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
        DB::table('akun')->insert([
        	'id' => '1',
            'name' => 'Krisnasw',
            'password' => Hash::make('hehe'),
            'username' => 'admin'
        	]);
    }
}
