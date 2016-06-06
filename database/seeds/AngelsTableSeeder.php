<?php

use Illuminate\Database\Seeder;

class AngelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Angel::create([
            'user_id' => '3',
            'name' => 'Linh',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => '',
            'totalGiving' => 0,
        ]);

        \App\Angel::create([
            'user_id' => '4',
            'name' => 'Ngan',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => '',
            'totalGiving' => 0,
        ]);

        \App\Angel::create([
            'user_id' => '5',
            'name' => 'Phuong',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => '',
            'totalGiving' => 0,
        ]);

        \App\Angel::create([
            'user_id' => '6',
            'name' => 'Duc',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => '',
            'totalGiving' => 0,
        ]);

        \App\Angel::create([
            'user_id' => '7',
            'name' => 'Lan Anh',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => '',
            'totalGiving' => 0,
        ]);

    }
}
