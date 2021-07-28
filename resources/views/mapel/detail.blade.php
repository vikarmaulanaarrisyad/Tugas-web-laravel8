@extends('layouts.master')

@section('title')

@section('content')

<form>
    <div class="form-group">
        <label for="nama">Mata Pelajaran</label>
        <input type="text" class="form-control" id="nama" placeholder="nama" value="{{ $mapel->nama }}" disabled>
    </div>
    <a href="/mapel" class="btn btn-primary">Kembali</a>
</form>

@endsection
