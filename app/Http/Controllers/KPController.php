<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KP;

class KPController extends Controller
{
    public function index() {
        $kp = KP::all();
        return view('viewkp', ['kp' => $kp]);
    }

    public function tambah()
    {
        return view('tambahkp');
    }

    public function simpan(Request $request)
    {
        DB::table('kp')->insert([
            'nim' => $request->nim,
            'semester' => $request->semester,
            'tahun_kp' => $request->tahun_kp,
            'tool' => $request->tool,
            'spek' => $request->spek,
            'lembaga' => $request->lembaga,
            'pimpinan' => $request->pimpinan,
            'alamat' => $request->alamat,
            'telp_lembaga' => $request->telp_lembaga,
            'wkt_pel_kp' => $request->wkt_pel_kp,
            'jdl_kp' => $request->jdl_kp,
            'dokumen' => $request->dokumen,
        ]);
        return redirect('/viewkp');
    }

    public function edit($id_kp) 
    {
        $kp = KP::find($id_kp);
        return view('editkp', ['kp' => $kp]);
    }

    public function updated($id_kp, Request $request)
    {
        $kp = KP::find($id_kp);
        $kp->nim = $request->nim;
        $kp->semester = $request->semester;
        $kp->tahun_kp = $request->tahun_kp;
        $kp->tool = $request->tool;
        $kp->spek = $request->spek;
        $kp->lembaga = $request->lembaga;
        $kp->pimpinan = $request->pimpinan;
        $kp->alamat = $request->alamat;
        $kp->telp_lembaga = $request->telp_lembaga;
        $kp->wkt_pel_kp = $request->wkt_pel_kp;
        $kp->jdl_kp = $request->jdl_kp;
        $kp->dokumen = $request->dokumen;
        $kp->simpan();
        return redirect('/viewkp');
    }

    public function delete($id_kp) 
    {
        $kp = KP::find($id_kp);
        $kp->delete();
        return redirect ('/viewkp');
    }
}
