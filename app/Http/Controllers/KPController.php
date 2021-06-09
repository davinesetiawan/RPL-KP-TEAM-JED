<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\KP;
use App\Mahasiswa;
use Auth;

class KPController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $id=Auth::user()->id;
        $nim=Auth::user()->nim;
        $kp = KP::where('id',$id)->get();
        return view('viewkp', ['kp' => $kp]);
    }

    public function tambah()
    {
        return view('tambahkp');
    }

    public function simpan(Request $request)
    {
        $fullname = $request->file('dokumen')->getClientOriginalName();
        $nim=Auth::user()->nim;
        $extn =$request->file('dokumen')->getClientOriginalExtension();
        $final= $nim.'SKP'.'_'.time().'.'.$extn; //tulisan file
        $path = $request->file('dokumen')->storeAs('public/skp', $final);

        $nim=Auth::user()->nim;
        $id=Auth::user()->id; 
        DB::table('kp')->insert([
            'id' =>$id,
            'nim' => $nim,
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
        return redirect('/kp');
    }

    public function edit($id_kp) 
    {
        $id=Auth::user()->id;
        $nim=Auth::user()->nim;
        $kp = KP::where('id_kp',$id_kp)->first();
        return view('editkp', ['kp' => $kp]);
    }

    public function updated(Request $request)
    {
        $fullname = $request->file('dokumen')->getClientOriginalName();
        $nim=Auth::user()->nim;
        $extn =$request->file('dokumen')->getClientOriginalExtension();
        $final= $nim.'SKP'.'_'.time().'.'.$extn; //tulisan file
        $path = $request->file('dokumen')->storeAs('public/skp', $final);
        
        $nim=Auth::user()->nim;
        $id=Auth::user()->id;  
        KP::where('id_kp', $request->id_kp)->update([
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
        return redirect('/kp');
    }

    public function delete($id_kp) 
    {
        KP::where('id_kp', $id_kp)->delete();
        return redirect ('/kp');
    }
}
