<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([
            'name' => 'Walis',
        	'email' => 'chefwalis@gmail.com',
        	'password' => bcrypt('makerecipe')
        ]);
        $user->save();
    }
}
