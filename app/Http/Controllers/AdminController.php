<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/indexadmin');
    }
    public function layanan()
    {
        $listlayanan = DB::table('layanans')
            ->select('*')
            ->join('kategoris', 'kategoris.id', '=', 'layanans.kategoris_id')
            ->get();
        return view('admin/layananadmin', ['listlayanan' => $listlayanan]);
    }
    public function kategori()
    {
        $listkategori = DB::table('kategoris')
            ->select('*')
            ->get();
        return view('admin/kategoriadmin', ['listkategori' => $listkategori]);
    }
    public function pelanggan()
    {
        $listpelanggan = DB::table('pelanggans')
            ->select('*')
            ->get();
        return view('admin/listpelanggan', ['listpelanggan' => $listpelanggan]);
    }
    public function laporan()
    {
        $listlaporan = DB::table('laporans')
            ->select('*')
            ->join('pelanggans', 'pelanggans.id', '=', 'laporans.pelanggans_id')
            ->join('status', 'status.id', '=', 'laporans.status_id')
            ->get();
        return view('admin/laporanadmin', ['listlaporan' => $listlaporan]);
    }
    public function tambahkategori()
    {
        return view('admin/tambahkategori');
    }

    public function simpankategori(Request $request)
    {
        $skategori = Kategori::create([
            'kode' => $request->kode,
            'nama_kategori' => $request->nama_kategori,
        ]);
        return view('admin/tambahkategori');
    }

    public function hapuskategori($id)
    {
        DB::table('kategoris')
            ->where('id', $id)
            ->delete();

        return redirect()->back();
    }

    public function tambahlayanan()
    {
        $lkategori = DB::table('kategoris')
            ->select('*')
            ->get();
        return view('admin/tambahlayanan', ['lkategori' => $lkategori]);
    }

    public function simpanlayanan(Request $request)
    {
        $lkategori = DB::table('kategoris')
            ->select('*')
            ->get();

        DB::table('layanans')->insert([
            'nama_layanan' => $request->nama_layanan,
            'detail' => $request->detail,
            'kategoris_id' => $request->nama_kategori,
        ]);

        return view('admin/tambahlayanan', ['lkategori' => $lkategori]);
    }
}
