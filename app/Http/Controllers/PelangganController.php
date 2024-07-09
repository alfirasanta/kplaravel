<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
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
        return view('pelanggan/status');
    }
}
