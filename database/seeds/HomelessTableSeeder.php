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
            'picture' => '',
        ]);

        \App\Homeless::create([
            'user_id' => '8',
            'nickname' => 'Ngoc',
            'location' => 'Brussels',
            'homeless_years' => '4',
            'date_of_birth' => '1986-01-01',
            'picture' => '',
        ]);

        \App\Homeless::create([
            'user_id' => '9',
            'nickname' => 'Vuong',
            'location' => 'Brussels',
            'homeless_years' => '5',
            'date_of_birth' => '1986-01-01',
            'picture' => '',
        ]);

        \App\Homeless::create([
            'user_id' => '10',
            'nickname' => 'Hoa',
            'location' => 'Brussels',
            'homeless_years' => '5',
            'date_of_birth' => '1986-01-01',
            'picture' => '',
        ]);

        \App\Homeless::create([
            'user_id' => '11',
            'nickname' => 'user',
            'location' => 'Brussels',
            'homeless_years' => '4',
            'date_of_birth' => '1986-01-01',
            'picture' => '',
        ]);
    }
}
