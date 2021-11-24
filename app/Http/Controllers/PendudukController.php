<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendudukController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$penduduk = DB::table('penduduk')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['penduduk' => $penduduk]);

    }
    public function tambah(){

        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('penduduk')->insert([
            'id' => $request->id,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/penduduk');

    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $penduduk = DB::table('penduduk')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['penduduk' => $penduduk]);

    }

        // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('penduduk')->where('id',$request->id)->update([
            'id' => $request->id,
			'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/penduduk');
    }

        // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('penduduk')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/penduduk');
    }
    public function login()
    {
    	// mengirim data pegawai ke view index
    	return view('login');

    }



}