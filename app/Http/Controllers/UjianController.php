<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KP;
use App\Dosen;
use App\Ujian;
use Auth;

class UjianController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        $kp = KP::where([
            ['status_kp', "=", 1],
            ['penguji', "=", NULL],
        ])->get()->toArray();
        return view('viewujian', ['kp' => $kp]);
    }

    public function jadwal($id_kp) 
    {
        $dosen= dosen::all()->toArray();
        return view('formjadwal', compact('id_kp', 'dosen'));
        // return $pkp;
    }

    public function simpan(Request $request)
    {
        $id=Auth::guard('dosen')->user()->id;  
        $nik=Auth::guard('dosen')->user()->nik;
        KP::where('id_kp', $request->id_kp)->update([
            'penguji' => $request->penguji,
            'ruangan' => $request->ruangan
        ]);
        Ujian::insert([
            'id_kp' => $request->id_kp,
            'jadwal_ujian' => $request->jadwal_ujian,
            'jam' => $request->jam,
            'ruangan' => $request->ruangan,
            'penguji' => $request->penguji
        ]);  
        return redirect('/verprakp');
    }
}
