<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{

		\App\User::create([
			'name' => 'Admin User',
			'username' => 'admin_user',
			'email' => 'admin@admin.com',
			'password' => bcrypt('admin'),
			'confirmed' => 1,
            'admin' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Test User',
			'username' => 'test_user',
			'email' => 'user@user.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Linh',
			'username' => 'linh_nguyen',
			'email' => 'linh@linh.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Ngan',
			'username' => 'ngan_nguye',
			'email' => 'ngan@ngan.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Phuong',
			'username' => 'phuong_manh',
			'email' => 'phuong@phuong.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Lan Anh',
			'username' => 'lan_anh',
			'email' => 'lan@anh.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Minh Duc',
			'username' => 'minh_duc',
			'email' => 'duc@minh.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Mai Moc',
			'username' => 'mai_moc',
			'email' => 'mai@moc.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Thuy Ngoc',
			'username' => 'thuy_ngoc',
			'email' => 'thuy@ngoc.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Phuc Vuong',
			'username' => 'phuc_vuong',
			'email' => 'phuc@vuong.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

		\App\User::create([
			'name' => 'Quynh Hoa',
			'username' => 'quynh_hoa',
			'email' => 'quynh@hoa.com',
			'password' => bcrypt('user'),
			'confirmed' => 1,
			'confirmation_code' => md5(microtime() . env('APP_KEY')),
		]);

	}

}
