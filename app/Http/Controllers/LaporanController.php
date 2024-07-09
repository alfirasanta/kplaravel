<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'numeric|required',
            'tanggal' => 'numeric|required',
            'detail' => 'required'
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $laporan = new Laporan;
        $laporan->nama = $request->nama;
        $laporan->alamat = $request->alamat;
        $laporan->no_telp = $request->no_telp;
        $laporan->tanggal = $request->tanggal;
        $laporan->detail = $request->detail;
        $laporan->save();

        return view('laporan.index');
    }
}
