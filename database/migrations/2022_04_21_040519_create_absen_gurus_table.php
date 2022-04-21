<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_gurus', function (Blueprint $table) {
            $table->id();
            $table->dateTime('jam_masuk');
            $table->dateTime('jam_keluar');
            $table->string('materi');
            $table->enum('tugas',['ada', 'tidak ada']);
            $table->string('jumlahmhs_hadir');
            $table->string('jumlahmhs_tdkhadir');
            $table->string('gambar');
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
        Schema::dropIfExists('absen_gurus');
    }
}
