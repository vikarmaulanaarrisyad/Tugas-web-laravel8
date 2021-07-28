@extends('layouts.master')

@section('content')


<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">

                <h3>{{ $siswa }}</h3>

                <p>Siswa</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/siswa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">

                <h3>{{ $mapel }}</h3>

                <p>Mata Pelajaran</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="/mapel" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">

                <h3>{{ $user }}</h3>

                <p>User</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endsection
