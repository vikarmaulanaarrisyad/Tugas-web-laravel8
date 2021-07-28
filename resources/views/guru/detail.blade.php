@extends('layouts.master')

@section('title')

@section('content')

<form>
    <div class="form-group">
        <label for="nip">NIP Guru</label>
        <input type="text" class="form-control" id="nip" placeholder="NIP Guru" value="{{ $guru->nip }}" disabled>
    </div>
    <div class="form-group">
        <label for="nama_guru">Nama Guru</label>
        <input type="text" class="form-control" id="nama_guru" value="{{ $guru->nama_guru }}" disabled>
    </div>
    <div class="form-group">
        <label for="nama_guru">Mata Pelajaran</label>
        <input type="text" class="form-control" id="nama_guru" value="{{ $guru->mapel->nama }}" disabled>
    </div>
    <a href="/guru" class="btn btn-primary">Kembali</a>
</form>

@endsection
