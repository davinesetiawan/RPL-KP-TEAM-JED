<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    protected $table = "ujian";
    protected $fillable = ['id_kp','id_mhs','id_dosen','tahun_ukp','ruangan','penguji','jadwal_ujian','status_ujian'];
}
