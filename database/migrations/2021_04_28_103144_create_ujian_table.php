<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUjianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian', function (Blueprint $table) {
            $table->increments('id_ujian');
            $table->string('id_kp');
            $table->string('id_mhs');
            $table->string('id_dosen');
            $table->string('tahun_ukp');
            $table->string('ruangan');
            $table->string('penguji');
            $table->string('jadwal_ujian');
            $table->string('status_ujian');
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
        Schema::dropIfExists('ujian');
    }
}
