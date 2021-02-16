<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Category::create([
            'name'=>'Beach'
        ]);
        \App\Category::create([
            'name'=>'River'
        ]);
    }
}
