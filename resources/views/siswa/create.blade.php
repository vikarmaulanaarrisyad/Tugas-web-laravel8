@extends('layouts.master')

@section('title')

@section('content')

<form action="/siswa/add" method="post">
    @csrf
    <div class="form-group">
        <label for="nisn">NISN</label>
        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Inputkan NISN Siswa" autocomplete="off">
    </div>
    <div class="form-group">
        <label for="nama_siswa">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Inputkan Nama Lengkap Siswa"autocomplete="off">
    </div>
    <div class="form-group">
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Inputkan Tempat Lahir Siswa"autocomplete="off">
    </div>
    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Inputkan Tanggal Lahir Siswa"autocomplete="off">
    </div>
    <div class="form-group">
        <label for="nohp">Nomor HP</label>
        <input type="number" class="form-control" id="nohp" name="nohp" placeholder="Inputkan Nomor HP Siswa"autocomplete="off">
    </div>
    <div class="form-group">
        <label for="nohp">Alamat</label>
        <textarea name="alamat" id="alamat" cols="30" rows="5" autocomplete="off" class="form-control" placeholder="Inputkan Alamat Siswa" autocomplete="off"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/siswa" class="btn btn-danger">Kembali</a>
</form>
@endsection
