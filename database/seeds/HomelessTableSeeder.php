<?php

use Illuminate\Database\Seeder;

class HomelessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Homeless::create([
            'user_id' => '2',
            'nickname' => 'Mai',
            'location' => 'Brussels',
            'homeless_years' => '3',
            'date_of_birth' => '1986-01-01',
            'picture' => 'https://s-media-cache-ak0.pinimg.com/736x/30/6c/db/306cdb31b5a048b2d9ca2979c2d35498.jpg',
        ]);

        \App\Homeless::create([
            'user_id' => '8',
            'nickname' => 'Ngoc',
            'location' => 'Brussels',
            'homeless_years' => '4',
            'date_of_birth' => '1986-01-01',
            'picture' => 'http://41.media.tumblr.com/35ba9f10554a125613003c6a85b2169c/tumblr_inline_nonj1qehez1qg1txh_500.jpg',
        ]);

        \App\Homeless::create([
            'user_id' => '9',
            'nickname' => 'Vuong',
            'location' => 'Brussels',
            'homeless_years' => '5',
            'date_of_birth' => '1986-01-01',
            'picture' => 'http://www.look.co.uk/sites/default/files/imagecache/scaled_620px_wide/michelle-keegan3_0.jpg',
        ]);

        \App\Homeless::create([
            'user_id' => '10',
            'nickname' => 'Hoa',
            'location' => 'Brussels',
            'homeless_years' => '5',
            'date_of_birth' => '1986-01-01',
            'picture' => 'http://wallpaperstock.net/wallpapers/thumbs/46457hd.jpg',
        ]);

        \App\Homeless::create([
            'user_id' => '11',
            'nickname' => 'user',
            'location' => 'Brussels',
            'homeless_years' => '4',
            'date_of_birth' => '1986-01-01',
            'picture' => 'https://i.guim.co.uk/img/media/c97ff101449bee47befc11ba959dd4d663dc29a9/746_18_6069_9384/master/6069.jpg?w=620&q=85&auto=format&sharp=10&s=c741c205a3fb7f59913fef4e7da80ee5',
        ]);
    }
}
