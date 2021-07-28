@extends('layouts.master')

@section('title')

@section('content')

<form action="/mapel" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Mata Pelajaran</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Inputkan Mata Pelajaran">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/mapel" class="btn btn-danger">Kembali</a>
</form>
@endsection
