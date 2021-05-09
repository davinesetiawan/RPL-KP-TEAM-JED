<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kp', function (Blueprint $table) {
            $table->increments('id_kp');
            $table->string('id_mhs');
            $table->string('id_dosen');
            $table->string('nim');
            $table->string('nik');
            $table->string('semester');
            $table->string('tahun_kp');
            $table->string('jdl_kp');
            $table->string('tool');
            $table->string('spek');
            $table->string('dokumen');
            $table->string('penguji');
            $table->string('ruangan');
            $table->string('pimpinan');
            $table->string('lembaga');
            $table->string('alamat');
            $table->string('telp_lembaga');
            $table->string('wkt_pel_kp');
            $table->string('status_kp');
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
        Schema::dropIfExists('kp');
    }
}
