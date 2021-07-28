@extends('layouts.master')

@section('title')

@section('content')

<form action="/update/{{ $guru->id }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nip">NIP Guru</label>
        <input type="text" class="form-control" id="nip" name="nip" placeholder="NIP Guru" value="{{ $guru->nip }}">
    </div>
    <div class="form-group">
        <label for="nama_guru">Nama Guru</label>
        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $guru->nama_guru }}">
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
    <button type="submit" class="btn btn-primary"> Save</button>
    <a href="/guru" class="btn btn-danger">Kembali</a>
</form>

@endsection
