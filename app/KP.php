<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KP extends Model
{
    protected $table = "kp";
    protected $fillable = ['id_mhs','id_dosen','nim','nik','semester','tahun_kp','jdl_kp','tool','spek','dokumen','penguji','ruangan','pimpinan','lembaga','alamat','telp_lembaga','wkt_pel_kp','status_kp'];
}
