<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\periode;

class periodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dosen');
    }

    public function index()
    {
        $periode = Periode::all()->toArray();
        return view('periode', compact ('periode'));
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'semester' => 'required',
            'tahun' => 'required'
        ]);

        Periode::where('status', 1)->update(['status' => 0]);
        $periode = new Periode([
            'semester' => $request->get('semester'),
            'status' => 1,
            'tahun' => $request->get('tahun')
        ]);
        $periode->save();
        return redirect("periode");
    }
}
