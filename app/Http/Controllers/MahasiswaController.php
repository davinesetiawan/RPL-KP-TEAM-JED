<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index() {
        $mhs = Mahasiswa::all();
        return view('mahasiswa', ['mhs' => $mhs]);
    }

    public function edit($id_mhs) 
    {
        $mhs = Mahasiswa::find($id_mhs);
        return view('editmahasiswa', ['mhs' => $mhs]);
    }
}
