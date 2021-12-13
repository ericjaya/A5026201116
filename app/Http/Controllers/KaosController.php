<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaosController extends Controller
{
    public function index()
    {
        // // mengambil data dari table kaos
        // $kaos = DB::table('kaos')->get();

        // // mengirim data pegawai ke view index
        // return view('kaos.index', ['kaos' => $kaos]);

        // mengambil data dari table kaos
        $kaos = DB::table('kaos')->paginate(5);

        // mengirim data kaos ke view index
        return view('kaos.index', ['kaos' => $kaos]);
    }

    // method untuk menampilkan view form tambah kaos
    public function tambah()
    {

        // memanggil view tambah
        return view('kaos.tambah');
    }

    // method untuk insert data ke table kaos
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('kaos')->insert([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    // method untuk edit data kaos
    public function edit($id)
    {
        // mengambil data kaos berdasarkan id yang dipilih
        $kaos = DB::table('kaos')->where('kodekaos', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('kaos.edit', ['kaos' => $kaos]);
    }

    // method untuk melihat detail kaos
    public function detail($id)
    {
        // mengambil data kaos berdasarkan id yang dipilih
        $kaos = DB::table('kaos')->where('kodekaos', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('kaos.detail', ['kaos' => $kaos]);
    }

    // update data kaos
    public function update(Request $request)
    {
        // update data kaos
        DB::table('kaos')->where('kodekaos', $request->id)->update([
            'merkkaos' => $request->merkkaos,
            'stockkaos' => $request->stockkaos,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    // method untuk hapus data kaos
    public function hapus($id)
    {
        // menghapus data kaos berdasarkan id yang dipilih
        DB::table('kaos')->where('kodekaos', $id)->delete();

        // alihkan halaman ke halaman kaos
        return redirect('/kaos');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table kaos sesuai pencarian data
        $kaos = DB::table('kaos')
            ->where('merkkaos', 'like', "%" . $cari . "%")
            ->paginate(5);

        // mengirim data pegawai ke view index
        return view('kaos.index', ['kaos' => $kaos]);
    }
}
