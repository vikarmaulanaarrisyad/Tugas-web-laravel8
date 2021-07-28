<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Mapel;
use DataTables;

class GuruController extends Controller
{
    public function json(){
        return Datatables::of(Guru::all())->make(true);
    }


    //Membuat Function Index
    public function index()
    {
        $title = 'Daftar Guru';
        $guru = Guru::all();
        return view('guru.index', compact('title', 'guru'));
    }

    // Membuat Function Detail
    public function detail($id)
    {
        $title = 'Detail Guru';
        $guru = Guru::find($id);
        return view('guru.detail', compact('title', 'guru'));
    }

    // Membuat Function Create untuk memanggil form tambah
    public function create()
    {
        $title = 'Tambah Guru';
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('guru.create', compact('title', 'guru', 'mapel'));
    }

    // Membuat Proses input data ke Database
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required|string',
            'mapel_id' => 'required',
        ]);
        Guru::create($request->all());
        return redirect('/guru')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $title = 'Edit Guru';
        $guru = Guru::find($id);
        $mapel = Mapel::all();
        return view('guru.edit', compact('title', 'guru', 'mapel'));
    }

    public function update(Request $request, Guru $id)
    {
        $input = Guru::where('id', $id->id)
            ->update([
                'nip' => $request->nip,
                'nama_guru' => $request->nama_guru,
                'mapel_id' => $request->mapel_id,
            ]);
        if ($input) {
            return redirect('/guru')->with('success', 'Data Berhasil Diubah!');
        } else {
            return redirect('/guru')->with('success', 'Data Gagal Diubah!');
        }
    }

    public function destroy(Guru $id)
    {
        $id->delete();
        return redirect('/guru')->with('success', 'Data Berhasil Dihapus!');
    }
}
