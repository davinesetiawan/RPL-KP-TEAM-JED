<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PraKP;

class praKPController extends Controller
{
    public function index() {
        $pkp = PraKP::all();
        return view('viewprakp', ['pkp' => $pkp]);
    }

    public function tambah()
    {
        return view('tambahprakp');
    }

    public function simpan(Request $request)
    {
        DB::table('prakp')->insert([
            'nim' => $request->nim,
            'semester' => $request->semester,
            'tahun_kp' => $request->tahun_kp,
            'tool' => $request->tool,
            'spek' => $request->spek,
            'telp_lembaga' => $request->telp_lembaga,
            'alamat' => $request->alamat,
            'lembaga' => $request->lembaga,
            'dokumen' => $request->dokumen,
            'pimpinan' => $request->pimpinan,
            'fax' => $request->fax,
            'wkt_pel_kp' => $request->wkt_pel_kp

        ]);
        return redirect('viewprakp');
    }

    public function edit($id_pkp) 
    {
        $pkp = PraKP::find($id_pkp);
        return view('editprakp', ['pkp' => $pkp]);
    }

    public function updated($id_pkp, Request $request)
    {
        $pkp = PraKP::find($id_pkp);
        $pkp->nim = $request->nim;
        $pkp->semester = $request->semester;
        $pkp->tahun_kp = $request->tahun_kp;
        $pkp->tool = $request->tool;
        $pkp->spek = $request->spek;
        $pkp->telp_lembaga = $request->telp_lembaga;
        $pkp->alamat = $request->alamat;
        $pkp->lembaga = $request->lembaga;
        $pkp->dokumen = $request->dokumen;
        $pkp->pimpinan = $request->pimpinan;
        $pkp->fax = $request->fax;
        $pkp->wkt_pel_kp = $request->wkt_pel_kp;
        $pkp->simpan();
        return redirect('viewprakp');
    }

    public function delete($id_pkp) 
    {
        $pkp = PraKP::find($id_pkp);
        $pkp->delete();
        return redirect ('viewprakp');
    }
}
