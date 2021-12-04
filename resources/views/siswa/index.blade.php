@extends('layouts.app')

@section('title-page', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-lg-6">
        <div class="card card-sm-4">
            <div class="card-icon bg-primary">
                <i class="ion ion-android-calendar"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Poin</h4>
                </div>
                <div class="card-body">
                    {{ $profile['total_poin'] }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-lg-6">
        <div class="card card-sm-4">
            <div class="card-icon bg-primary">
                <i class="ion ion-android-alert"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Pelanggaran</h4>
                </div>
                <div class="card-body">
                    {{ $totalPelanggaran }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Top 5 Pelanggaran Siswa</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>Total Poin</th>
                    <th>Kelas</th>
                </tr>
                    @foreach ($topSiswa as $data)
                    <tr class="@if($data['nama_siswa'] == $profile->nama_siswa) font-weight-bold @endif">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data['nama_siswa']  }}</td>
                        <td>{{ $data['total_poin']  }}</td>
                        <td>{{ $data['nama_kelas']  }}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Information!</h4>
    </div>
    <div class="card-body">
        <h6><a href="https://bit.ly/TataTertibSiswa2021" target="_blank" class="download">
                <i class="fas fa-file-pdf"></i> Unduh Tata Tertib dan Poin Pelanggaran Tahun 2021/2022</a></h6>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h4>Sanksi Pelanggaran</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>No.</th>
                    <th>Rentang</th>
                    <th>Tindakan Sekolah</th>
                    <th>Sanksi</th>
                    <th>Pelaksana</th>
                </tr>
                @foreach ($sanksi as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data['rentang'] }}</td>
                    <td>{{ $data['tindakan_sekolah'] }}</td>
                    <td>{{ $data['sanksi'] }}</td>
                    <td>{{ $data['pelaksana'] }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endsection
