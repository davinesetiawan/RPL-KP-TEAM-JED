<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrakpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prakp', function (Blueprint $table) {
            $table->increments('id_prakp');
            $table->string('id_mhs');
            $table->string('id_dosen');
            $table->string('semester');
            $table->string('tahun_kp');
            $table->string('nim');
            $table->string('nik');
            $table->string('tool');
            $table->string('spek');
            $table->string('dokumen');
            $table->string('penguji');
            $table->string('ruangan');
            $table->string('lembaga');
            $table->string('pimpinan');
            $table->string('alamat');
            $table->string('telp_lembaga');
            $table->string('wkt_pel_kp');
            $table->string('status_prakp');
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
        Schema::dropIfExists('prakp');
    }
}
