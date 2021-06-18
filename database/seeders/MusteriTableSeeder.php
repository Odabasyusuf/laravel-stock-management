<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusteriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('musteris')->insert(
            [
                [
                    'musteriadi' => 'demirci',
                    'tel' => '5556664455',
                    'adres' => 'Adana',
                ],
                [
                    'musteriadi' => 'mehmet',
                    'tel' => '4448881122',
                    'adres' => 'Karabük',
                ]
            ]
        );
    }
}
