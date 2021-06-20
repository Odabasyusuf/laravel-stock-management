<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerestePartisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kereste_partis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('musteri_id')->nullable();
            $table->string('urun_kalitesi')->nullable();
            $table->text('parti_detay')->nullable();
            $table->string('toplam_dm3')->nullable();
            $table->string('durum')->default('Depoda')->nullable();
            $table->string('aciklama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kereste_partis');
    }
}
