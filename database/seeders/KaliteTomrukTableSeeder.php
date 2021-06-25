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
                    'kalite_adi' => '1.Sınıf Kayın Tomruğu',
                ],
                [
                    'kalite_kodu' => '01.02',
                    'kalite_adi' => '2.Sınıf Kayın Tomruğu',
                ],
                [
                    'kalite_kodu' => '01.03',
                    'kalite_adi' => '3.Sınıf Kayın Tomruğu',
                ],
                [
                    'kalite_kodu' => '01.04',
                    'kalite_adi' => '4.Sınıf Kayın Tomruğu',
                ],
                [
                    'kalite_kodu' => '02.01',
                    'kalite_adi' => '1.Sınıf Meşe Tomruğu',
                ],
                [
                    'kalite_kodu' => '02.02',
                    'kalite_adi' => '2.Sınıf Meşe Tomruğu',
                ],
                [
                    'kalite_kodu' => '02.03',
                    'kalite_adi' => '3.Sınıf Meşe Tomruğu',
                ],
                [
                    'kalite_kodu' => '02.04',
                    'kalite_adi' => '4.Sınıf Meşe Tomruğu',
                ],
                [
                    'kalite_kodu' => '03.01',
                    'kalite_adi' => '1.Sınıf Çam Tomruğu',
                ],
                [
                    'kalite_kodu' => '03.02',
                    'kalite_adi' => '2.Sınıf Çam Tomruğu',
                ],
                [
                    'kalite_kodu' => '03.03',
                    'kalite_adi' => '3.Sınıf Çam Tomruğu',
                ],
                [
                    'kalite_kodu' => '03.04',
                    'kalite_adi' => '4.Sınıf Çam Tomruğu',
                ],
                [
                    'kalite_kodu' => '04.01',
                    'kalite_adi' => '1.Sınıf Göknar Tomruğu',
                ],
                [
                    'kalite_kodu' => '04.02',
                    'kalite_adi' => '2.Sınıf Göknar Tomruğu',
                ],
                [
                    'kalite_kodu' => '04.03',
                    'kalite_adi' => '3.Sınıf Göknar Tomruğu',
                ],
                [
                    'kalite_kodu' => '04.04',
                    'kalite_adi' => '4.Sınıf Göknar Tomruğu',
                ],
                [
                    'kalite_kodu' => '05.01',
                    'kalite_adi' => '1.Sınıf Ihlamur Tomruğu',
                ],
                [
                    'kalite_kodu' => '05.02',
                    'kalite_adi' => '2.Sınıf Ihlamur Tomruğu',
                ],
                [
                    'kalite_kodu' => '05.03',
                    'kalite_adi' => '3.Sınıf Ihlamur Tomruğu',
                ],
                [
                    'kalite_kodu' => '05.04',
                    'kalite_adi' => '4.Sınıf Ihlamur Tomruğu',
                ]
            ]
        );
    }
}
