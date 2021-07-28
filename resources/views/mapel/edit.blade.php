@extends('layouts.master')

@section('title')

@section('content')

<form action="/mapel/update/{{ $mapel->id }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nip">NIP Guru</label>
        <input type="text" class="form-control" id="nip" name="nama" value="{{ $mapel->nama }}">
    </div>
    <button type="submit" class="btn btn-primary"> Save</button>
    <a href="/mapel" class="btn btn-danger">Kembali</a>
</form>

@endsection
