<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaliteTomrukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kalite_tomruk')->insert(
            [
                [
                    'kalite_kodu' => '01.01',
                    'kalite_adi' => '1.Sınıf Kayın Kereste',
                ],
                [
                    'kalite_kodu' => '01.02',
                    'kalite_adi' => '2.Sınıf Kayın Kereste',
                ],
                [
                    'kalite_kodu' => '01.03',
                    'kalite_adi' => '3.Sınıf Kayın Kereste',
                ],
                [
                    'kalite_kodu' => '01.04',
                    'kalite_adi' => '4.Sınıf Kayın Kereste',
                ],
                [
                    'kalite_kodu' => '02.01',
                    'kalite_adi' => '1.Sınıf Meşe Kereste',
                ],
                [
                    'kalite_kodu' => '02.02',
                    'kalite_adi' => '2.Sınıf Meşe Kereste',
                ],
                [
                    'kalite_kodu' => '02.03',
                    'kalite_adi' => '3.Sınıf Meşe Kereste',
                ],
                [
                    'kalite_kodu' => '02.04',
                    'kalite_adi' => '4.Sınıf Meşe Kereste',
                ],
                [
                    'kalite_kodu' => '03.01',
                    'kalite_adi' => '1.Sınıf Çam Kereste',
                ],
                [
                    'kalite_kodu' => '03.02',
                    'kalite_adi' => '2.Sınıf Çam Kereste',
                ],
                [
                    'kalite_kodu' => '03.03',
                    'kalite_adi' => '3.Sınıf Çam Kereste',
                ],
                [
                    'kalite_kodu' => '03.04',
                    'kalite_adi' => '4.Sınıf Çam Kereste',
                ],
                [
                    'kalite_kodu' => '04.01',
                    'kalite_adi' => '1.Sınıf Göknar Kereste',
                ],
                [
                    'kalite_kodu' => '04.02',
                    'kalite_adi' => '2.Sınıf Göknar Kereste',
                ],
                [
                    'kalite_kodu' => '04.03',
                    'kalite_adi' => '3.Sınıf Göknar Kereste',
                ],
                [
                    'kalite_kodu' => '04.04',
                    'kalite_adi' => '4.Sınıf Göknar Kereste',
                ],
                [
                    'kalite_kodu' => '05.01',
                    'kalite_adi' => '1.Sınıf Ihlamur Kereste',
                ],
                [
                    'kalite_kodu' => '05.02',
                    'kalite_adi' => '2.Sınıf Ihlamur Kereste',
                ],
                [
                    'kalite_kodu' => '05.03',
                    'kalite_adi' => '3.Sınıf Ihlamur Kereste',
                ],
                [
                    'kalite_kodu' => '05.04',
                    'kalite_adi' => '4.Sınıf Ihlamur Kereste',
                ]
            ]
        );
    }
}
