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

    public function editkategori($id)
    {
        $ekategori = DB::table('kategoris')
            ->where('id', $id)
            ->get();
        return view('admin/editkategori', ['ekategori' => $ekategori]);
    }

    public function updatekategori(Request $request)
    {
        DB::table('kategoris')->where('id', $request->id)->update([
            'kode' => $request->kode,
            'nama_kategori' => $request->nama_kategori,
        ]);

        return redirect('/kategoriadmin');
    }

    public function editlayanan($id)
    {
        // $elayanan = Layanan::find($id);
        // $ekategori = Kategori::all();
        // return view('admin/editlayanan', compact('elayanan', 'ekategori'));
        // $elayanan = DB::table('layanans')
        //     ->where('id', $id)
        //     ->get();
        $kategoris = Kategori::all();
        $elayanan = DB::table('layanans')
            ->where('id', $id)
            ->get();
        return view('admin/editlayanan', compact('kategoris', 'elayanan'));
    }

    public function updatelayanan(Request $request, string $id)
    {
        $elayanan = Layanan::find($id);
        $elayanan->nama_layanan = $request->nama_layanan;
        $elayanan->detail = $request->detail;
        $elayanan->kategoris_id = $request->nama_kategori;
        $elayanan->save();

        return redirect('/layananadmin');
        // DB::table('layanans')->where('id', $request->id)->update([
        //     'nama_layanan' => $request->nama_layanan,
        //     'detail' => $request->detail,
        //     'kategoris_id' => $request->nama_kategori,
        // ]);

        // return redirect('/kategoriadmin');
    }

    public function hapuslayanan($id)
    {
        DB::table('layanans')
            ->where('id', $id)
            ->delete();
        return redirect('/layananadmin');
    }

    public function hapuskategori($id)
    {
        DB::table('kategoris')
            ->where('id', $id)
            ->delete();

        return redirect('/kategoriadmin');
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
        return redirect('/layananadmin');
    }
}
