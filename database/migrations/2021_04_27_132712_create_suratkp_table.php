<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratkpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkp', function (Blueprint $table) {
            $table->increments('id_skp');
            $table->integer('id_mhs');
            $table->integer('id_dosen');
            $table->string('nim');
            $table->string('semester');
            $table->string('tahun_kp');
            $table->string('telp_lembaga');
            $table->string('alamat');
            $table->string('lembaga');
            $table->string('dokumen');
            $table->string('pimpinan');
            $table->string('fax');
            $table->string('status_skp');
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
        Schema::dropIfExists('suratkp');
    }
}
