<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifikasi', function (Blueprint $table) {
            $table->increments('verifikasi_id');
            $table->string('verifikasi_mahasiswa_nama', 100)->nullable()->default('text');
            $table->string('verifikasi_npm');
            $table->string('verifikasi_kursus_nama');
            $table->string('verifikasi_jadwal_waktu');
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
        Schema::dropIfExists('verifikasi');
    }
}
