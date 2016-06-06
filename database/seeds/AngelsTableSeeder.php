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
            'picture' => 'https://s-media-cache-ak0.pinimg.com/736x/45/60/1d/45601d033ad7f8206ded5fd8312f4949.jpg',
            'totalGiving' => 0,
        ]);

        \App\Angel::create([
            'user_id' => '4',
            'name' => 'Ngan',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => 'http://i297.photobucket.com/albums/mm224/dominoes001/530739_10151441930330329_638192844_n_zps2465a22f.jpg',
            'totalGiving' => 0,
        ]);

        \App\Angel::create([
            'user_id' => '5',
            'name' => 'Phuong',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => 'http://4.bp.blogspot.com/-DlhJ5dfXmEA/Txsoe9MsG1I/AAAAAAAAAfg/AaAwuDBdZP4/s1600/299910_2254364411380_1616407311_2192416_366688443_n.jpg',
            'totalGiving' => 0,
        ]);

        \App\Angel::create([
            'user_id' => '6',
            'name' => 'Duc',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => 'http://s8.postimg.org/iedq7yas5/image.jpg',
            'totalGiving' => 0,
        ]);

        \App\Angel::create([
            'user_id' => '7',
            'name' => 'Lan Anh',
            'address' => 'Brussels',
            'profession' => 'Student',
            'date_of_birth' => '1990-05-05',
            'anonymous' => 0,
            'picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVaBs1m8cijc5-frIObRDnkoFCfnl_shV6pc_CIQ1mqqzt1kDU',
            'totalGiving' => 0,
        ]);

    }
}
