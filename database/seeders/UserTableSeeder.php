<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Yusuf',
                'email' => 'yusuf.odabas.78@gmail.com',
                'password' => bcrypt('123456789'),
                'role' => 'admin',
                'active' => 'true'
            ]
        );
    }
}
