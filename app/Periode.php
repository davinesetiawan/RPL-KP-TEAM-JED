<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $fillable =
    [
        'semester', 'tahun', 'status',
    ];
    protected $table = 'periode';
}
