<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Laporan;

class PelangganController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $listlayanan = DB::select("select nama_layanan, detail from layanans where kategoris_id = '1'");
        return view('pelanggan/indexpel', ['listlayanan' => $listlayanan]);
    }
    public function layanan()
    {
        $kategori = DB::select('select nama_kategori from kategoris');
        $daftarlayanan = DB::select('select nama_layanan, detail from layanans');
        return view('pelanggan/layanan', ['kategori' => $kategori, 'daftarlayanan' => $daftarlayanan]);
    }
    public function kategori()
    {
        // $kategori = DB::select('select * from kategori');
    }
    public function laporan()
    {
        return view('pelanggan/laporan');
    }
    public function login()
    {
        return view('pelanggan/login');
    }
    public function register()
    {
        return view('pelanggan/register');
    }
    public function status()
    {
        $daftarlaporan = DB::table('laporans')
            ->select('*')
            ->join('pelanggans', 'pelanggans.id', '=', 'laporans.pelanggans_id')
            ->join('status', 'status.id', '=', 'laporans.status_id')
            ->get();
        return view('pelanggan/status', ['daftarlaporan' => $daftarlaporan]);
    }

    public function simpanlaporan(Request $request)
    {
        $slaporan = DB::table('laporans')
            ->select('*')
            ->get();

        DB::table('laporans')->insert([
            'no_pel' => $request->no_pel,
            'detail' => $request->detail,
            'pelanggans_id' => $request->nama,
            'pelanggans_id' => $request->alamat,
            'pelanggans_id' => $request->no_telp,
            'status_id' => $request->status,
        ]);

        return view('pelanggan/status', ['laporan' => $slaporan]);
    }
}
