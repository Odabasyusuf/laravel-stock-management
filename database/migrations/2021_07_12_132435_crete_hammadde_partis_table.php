<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreteHammaddePartisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hammadde_partis', function (Blueprint $table) {
            $table->id();
            $table->string('miktar')->nullable();
            $table->string('adet')->nullable();
            $table->integer('musteri_id')->nullable();
            $table->string('arac_plaka')->nullable();
            $table->string('nakliye_seri_no')->nullable();
            $table->string('gelis_yeri')->nullable();
            $table->string('emval_yeri')->nullable();
            $table->string('agac_turu')->nullable();
            $table->string('urun_turu')->nullable();
            $table->string('sinif_kodu')->nullable();
            $table->string('boy_kodu')->nullable();
            $table->string('cap_kodu')->nullable();
            $table->string('durum')->default('Depoda')->nullable();
            $table->string('aciklama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
