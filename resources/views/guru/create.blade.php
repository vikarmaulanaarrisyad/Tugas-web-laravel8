@extends('layouts.master')

@section('title')

@section('content')

<form action="/guru" method="post">
    @csrf
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" id="nip" name="nip" placeholder="Inputkan NIP Guru">
    </div>
    <div class="form-group">
        <label for="nama_guru">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Inputkan Nama Lengkap">
    </div>
    <div class="form-group">
        <label for="nama_guru">Mata Pelajaran</label>
        <select class="form-control" name="mapel_id">
            <option value="">Pilih Mapel</option>
            @foreach ($mapel as $dt )
            <option value="{{ $dt->id }}">{{$dt->nama }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/guru" class="btn btn-danger">Kembali</a>
</form>



@endsection
