<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Offer::create([
            'user_id' => '2',
            'type' => 'Sport Shoes',
            'category' => 'Shoes',
            'description' => 'Shoe for running',
            'picture' => '',
            'amount' => '7',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '2',
            'type' => 'Slipper',
            'category' => 'Shoes',
            'description' => 'Used at home',
            'picture' => '',
            'amount' => '12',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '2',
            'type' => 'Socks',
            'category' => 'Old clothes',
            'description' => 'Socks for wearing shoes',
            'picture' => '',
            'amount' => '17',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '3',
            'type' => 'Rice',
            'category' => 'Food',
            'description' => 'Used for cooking',
            'picture' => '',
            'amount' => '100',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '3',
            'type' => 'Noodle',
            'category' => 'Food',
            'description' => 'Used for cooking spaghetti',
            'picture' => '',
            'amount' => '17',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '4',
            'type' => 'Bed',
            'category' => 'Furniture',
            'description' => 'Used for sleeping',
            'picture' => '',
            'amount' => '1',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '4',
            'type' => 'Sport Shoes',
            'category' => 'Shoes',
            'description' => 'Shoe for running',
            'picture' => '',
            'amount' => '7',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '5',
            'type' => 'Legal representation in court',
            'category' => 'Legal services',
            'description' => 'Legal representation in court',
            'picture' => '',
            'amount' => '1',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '4',
            'type' => 'Mattress',
            'category' => 'Furniture',
            'description' => 'Used for sleeping',
            'picture' => '',
            'amount' => '3',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '2',
            'type' => 'Sofa',
            'category' => 'Furniture',
            'description' => 'Used for sleeping',
            'picture' => '',
            'amount' => '2',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '3',
            'type' => 'Shirts and pants',
            'category' => 'Old clothes',
            'description' => 'Used for wearing',
            'picture' => '',
            'amount' => '7',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '4',
            'type' => 'Watches',
            'category' => 'Clothes',
            'description' => 'Used for wearing',
            'picture' => '',
            'amount' => '7',
            'expired_date' => '',
        ]);

        \App\Offer::create([
            'user_id' => '4',
            'type' => 'Ipad',
            'category' => 'Old things',
            'description' => 'For entertainment',
            'picture' => '',
            'amount' => '4',
            'expired_date' => '',
        ]);
    }
}
