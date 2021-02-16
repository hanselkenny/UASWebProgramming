<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Admin;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'name' => 'admin',
            'email' => 'admin@multi-auth.test',
            'password' => bcrypt(12345678),
        ]);
    }
}
