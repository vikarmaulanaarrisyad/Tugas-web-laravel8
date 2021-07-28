<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $title = 'Data Siswa';
        $siswa = Siswa::all();
        return view('siswa.index',compact('siswa','title'));
    }
    public function create(){
        $title = 'Tambah Siswa';
        return view('siswa.create',compact('title'));
    }

    public function store(Request $request){
        $request->validate([
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
        ]);
        Siswa::create($request->all());
        return redirect('/siswa')->with('success', 'Data Berhasil Ditambahkan');
    }
}
