<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PraKP extends Model
{
    protected $table = "prakp";
    protected $fillable = ['id_prakp','id','id_dosen','semester','tahun_kp','nim','nik','tool','spek','dokumen','penguji','ruangan','lembaga','pimpinan','alamat','telp_lembaga','wkt_pel_kp','status_prakp'];
}
