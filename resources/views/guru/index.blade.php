@extends('layouts.master')

@section('title')

@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <h4>{{ $title }}</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i>
                            Refresh</button>
                        <a href="/guru/tambah" class="btn btn-sm btn-primary"><i class="fa fa-plus"> Tambah Data</i></a>
                    </p>
                </div>
                {{-- Box Model --}}
                <div class="box-body">
                    <div class="table table-responsive">
                        {{-- Table --}}
                        <table class="table table-responsive" id="table_id">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP Guru</th>
                                    <th>Nama Guru</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach ($guru as $e => $dt)
                                <tbody>
                                    <tr>
                                        <td>{{ $e + 1 }}</td>
                                        <td>{{ $dt->nip }}</td>
                                        <td>{{ $dt->nama_guru }}</td>
                                        <td>
                                            <a href="/guru/detail/{{ $dt->id }}" class="btn btn-sm btn-success"><i
                                                    class="fa fa-eye"></i> Detail</a>
                                            <a href="/guru/edit/{{ $dt->id }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"> Edit</i></a>
                                            <a href="/guru/delete/{{ $dt->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"> Delete</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {{-- End Table --}}
                    </div>
                </div>
                {{-- Box Model --}}
            </div>
        </div>
    </div>
@endsection
