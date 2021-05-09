<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SuratKP;
use App\Mahasiswa;
use Auth;

class SuratKPController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
   
    public function index() {
        $skp = SuratKP::all();

        return view('viewsuratkp', ['skp' => $skp]);
    }

    public function tambahSurat()
    {
        return view('tambahSurat');
    }

    // public function show($id_mhs){
    //     $mhs = Mahasiswa::where('id_mhs',$id_mhs)->firstOrFail();
    // }

    public function simpan(Request $request)
    {
        $nim=Auth::user()->nim;
        $id=Auth::user()->id_mhs;
        DB::table('suratkp')->insert([
            'id_mhs' => $id,
            'nim' => $nim,
            'semester' => $request->semester,
            'tahun_kp' => $request->tahun_kp,
            'telp_lembaga' => $request->telp_lembaga,
            'alamat' => $request->alamat,
            'lembaga' => $request->lembaga,
            'dokumen' => $request->dokumen,
            'pimpinan' => $request->pimpinan,
            'fax' => $request->fax
        ]);
        return redirect('/viewsuratkp');
    }

    public function edit($id_skp) 
    {
        $skp = SuratKP::find($id_skp);
        return view('editSurat', ['skp' => $skp]);
    }

    public function updated($id_skp, Request $request)
    {
        $skp = SuratKP::find($id_skp);

        $skp->semester = $request->semester;
        $skp->tahun_kp = $request->tahun_kp;
        $skp->telp_lembaga =  $request->telp_lembaga;
        $skp->alamat = $request->alamat;
        $skp->lembaga = $request->lembaga;
        $skp->dokumen = $request->dokumen;
        $skp->pimpinan = $request->pimpinan;
        $skp->fax = $request->fax;
        $skp->simpan();
        return redirect('/viewsuratkp');
    }

    public function delete($id_skp) 
    {
        $skp = SuratKP::find($id_skp);
        $skp->delete();
        return redirect ('/viewsuratkp');
    }

}
