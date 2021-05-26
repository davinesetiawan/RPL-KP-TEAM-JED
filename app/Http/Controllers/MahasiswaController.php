<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use Auth;

class MahasiswaController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $mhs = Mahasiswa::all();
        return view('mahasiswa', ['mhs' => $mhs]);
    }

    // public function edit(Request $request)
    // {
    //     $this->validate($request, [
    //         'nim' => 'required'
    //     ]);
        
    //     $dup = Mahasiswa::where ([
    //         ['nim', '=', $request->get('nim')],
    //     ])->value('id_mhs');
    // }

    public function edit($id) 
    {
        $mhs = Mahasiswa::find($id);
        return view('editmahasiswa', ['mhs' => $mhs]);
    }

    public function updated(Request $request)
    {
        $nim=Auth::user()->nim;
        $id=Auth::user()->id;  
        $email=Auth::user()->email;  
        DB::table('mahasiswa')->update([
            'nama_mhs' => $request->nama_mhs,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp_mhs' => $request->no_telp_mhs,
            'sks' => $request->sks,
        ]);
        return redirect('/mahasiswa');
    }
}
