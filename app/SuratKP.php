<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKP extends Model
{
    protected $table = "suratkp";
    protected $fillable = ['id_mhs','id_dosen','nim', 'semester', 'tahun_kp', 'telp_lembaga', 'alamat', 'lembaga', 'dokumen', 'pimpinan', 'fax','status_kp'];
}
