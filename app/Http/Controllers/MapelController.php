<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    // Menampilkan Data Selulur Mapel
    public function index(){
        $title = 'Mata Pelajaran';
        $mapel = Mapel::all();
        return view('mapel.index',compact('title','mapel'));
    }

    public function create(){
        $title = 'Tambah Mapel';
        return view('mapel.create',compact('title'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
        ]);
        Mapel::create($request->all());
        return redirect('/mapel')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function detail($id){
        $title = 'Detail Guru';
        $mapel = Mapel::find($id);
        return view('mapel.detail', compact('title', 'mapel'));
    }

    public function edit($id)
    {
        $title = 'Edit Mapel';
        $mapel = Mapel::find($id);
        return view('mapel.edit', compact('title', 'mapel'));
    }

    public function update(Request $request, Mapel $id)
    {
        $input = Mapel::where('id', $id->id)
            ->update([
                'nama' => $request->nama,
            ]);
        if ($input) {
            return redirect('/mapel')->with('success', 'Data Berhasil Diubah!');
        } else {
            return redirect('/mapel')->with('success', 'Data Gagal Diubah!');
        }
    }

    public function destroy(Mapel $id)
    {
        $id->delete();
        return redirect('/mapel')->with('success', 'Data Berhasil Dihapus!');
    }
}
