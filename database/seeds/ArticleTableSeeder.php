<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Article::create([
           'title'=>'Pantai Kuta Bali',
            'user_id'=>'1',
            'category_id'=>'1',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut velit nulla. Ut rutrum bibendum condimentum. Sed consequat lorem at tortor auctor imperdiet nec in sem. Pellentesque vitae felis et purus volutpat tincidunt ac ut orci. Nulla placerat facilisis facilisis. In sed tincidunt ante. Morbi volutpat rutrum ante. Curabitur interdum aliquet urna, vitae lobortis massa consectetur ac. Maecenas euismod ipsum at neque convallis, vel bibendum massa malesuada. Nulla scelerisque semper vulputate. Mauris euismod ornare enim non pharetra.'
        ]);
    }
}
