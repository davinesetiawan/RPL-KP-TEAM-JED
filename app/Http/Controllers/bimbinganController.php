<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;
use Auth;

class bimbinganController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth:dosen');
    }

    public function index()
    {
        $id=Auth::guard('dosen')->user()->id;
        // $nim=Auth::user()->nim;
        $mhs = Mahasiswa::where('id_dosen',$id)->get();
        return view('lihatbim', ['mhs' => $mhs]);
    }
}
