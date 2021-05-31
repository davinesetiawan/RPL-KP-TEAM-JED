<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use Notifiable;
    // @var array

    protected $fillable = [
        'nim', 'nama_mhs', 'email',
    ];

    // @var array

    protected $table = "mahasiswa";

    public function setAttribute($key, $value)
    {
      $isRememberTokenAttribute = $key == $this->getRememberTokenName();
      if (!$isRememberTokenAttribute)
      {
        parent::setAttribute($key, $value);
      }
    }
  //   public function post(){
  //     // disini kita katakan bahwa setiap user akan memiliki banyak post
  //     // keterangan: itu PostModel sesuaikan dengan nama MODEL POST yang agan gunakan
  //     return $this->hasMany->('App\PostModel');
  //  }

}
