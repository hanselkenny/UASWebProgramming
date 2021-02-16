<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name' => 'test user',
            'email' => 'test@user.com',
            'phone' => '123445667',
            'password' => bcrypt(12345678),
            'role' =>'1'
        ]);
    }
}
