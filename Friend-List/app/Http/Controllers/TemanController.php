<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TemanController extends Controller
{
    public function readdata()
    {
        //mau ambil data dari tabel teman
        $teman= DB::table('teman')->get();
 
        // mengirim ke halaman teman untuk ditampilkan data
        return view('datateman',['teman'=>$teman]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('teman')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/tampildata');
    }

    public function edit($kontak)
    {
        #ambil data mahasiswa berdasarkan nim
        $teman = DB::table('teman')->where('kontak', $kontak)->get();

        #passing data
        return view('edit', ['teman' => $teman]);
    }

    public function update(Request $request)
    {
        DB::table('teman')->where('kontak', $request->kontak)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/tampildata');
    }

    public function hapus($kontak)
    {
        DB::table('teman')->where('kontak', $kontak)->delete();
        return redirect('/tampildata');
    }

}
