<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaliteKeresteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kalite_kereste')->insert(
            [
                [
                    'kalite_kodu' => 'K01.01',
                    'kalite_adi' => '1.Sınıf Kayın Kereste',
                ],
                [
                    'kalite_kodu' => 'K01.02',
                    'kalite_adi' => '2.Sınıf Kayın Kereste',
                ],
                [
                    'kalite_kodu' => 'K01.03',
                    'kalite_adi' => '3.Sınıf Kayın Kereste',
                ],
                [
                    'kalite_kodu' => 'K01.04',
                    'kalite_adi' => '4.Sınıf Kayın Kereste',
                ],
                [
                    'kalite_kodu' => 'K01.05',
                    'kalite_adi' => 'Iskarta Kayın Kereste',
                ],
                [
                    'kalite_kodu' => 'K01.01.P',
                    'kalite_adi' => '1.Sınıf Kayın Prizma',
                ],
                [
                    'kalite_kodu' => 'K01.02.P',
                    'kalite_adi' => '2.Sınıf Kayın Prizma',
                ],
                [
                    'kalite_kodu' => 'K01.03.P',
                    'kalite_adi' => '3.Sınıf Kayın Prizma',
                ],
                [
                    'kalite_kodu' => 'K01.04.P',
                    'kalite_adi' => '4.Sınıf Kayın Prizma',
                ],
                [
                    'kalite_kodu' => 'K02.01',
                    'kalite_adi' => '1.Sınıf Meşe Kereste',
                ],
                [
                    'kalite_kodu' => 'K02.02',
                    'kalite_adi' => '2.Sınıf Meşe Kereste',
                ],
                [
                    'kalite_kodu' => 'K02.03',
                    'kalite_adi' => '3.Sınıf Meşe Kereste',
                ],
                [
                    'kalite_kodu' => 'K02.04',
                    'kalite_adi' => '4.Sınıf Meşe Kereste',
                ]
            ]
        );
    }
}
