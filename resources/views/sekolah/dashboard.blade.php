@extends('layouts.app')

@section('title-page', 'Dashboard')

@section('content')
<div class="row">
    @if (Auth::user()->username == 'almiravan')
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card card-sm-4">
            <div class="card-icon bg-primary">
                <i class="ion ion-android-calendar"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Tanggal</h4>
                </div>
                <div class="card-body">{{ date('d/m/Y') }}</div>
            </div>
        </div>
    </div>
    @endif
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card card-sm-4">
        <div class="card-icon bg-primary">
          <i class="ion ion-ios-people"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Siswa</h4>
          </div>
          <div class="card-body">
            30
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card card-sm-4">
        <div class="card-icon bg-primary">
          <i class="ion ion-ios-book"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Kelas</h4>
          </div>
          <div class="card-body">
            30
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <div class="card card-sm-4">
        <div class="card-icon bg-primary">
          <i class="ion ion-document-text"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Jenis Pelanggaran</h4>
          </div>
          <div class="card-body">
            30
          </div>
        </div>
      </div>
    </div>
    @if (Auth::user()->role == 'pegawai')
    <div class="col-12 col-sm-6 col-lg-3">
        <div class="card card-sm-4">
            <div class="card-icon bg-primary">
                <i class="ion ion-android-alert"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Pelanggaran Siswa</h4>
                </div>
                <div class="card-body">
                    40
                </div>
            </div>
        </div>
    </div>
    @endif
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
              <thead>
                  <tr>
                    <th>No.</th>
                    <th>Rentang</th>
                    <th>Tindakan Sekolah</th>
                    <th>Sanksi</th>
                    <th>Pelaksana</th>
                  </tr>
              </thead>
              <tbody>
                  {{-- @foreach ($sanksi as $data)
                    <tr>
                        <td>{{ $data['no_sanksi'] }}</td>
                        <td>{{ $data['rentang'] }}</td>
                        <td>{{ $data['tindakan_sekolah'] }}</td>
                        <td>{{ $data['sanksi'] }}</td>
                        <td>{{ $data['pelaksana'] }}</td>
                    </tr>
                  @endforeach --}}
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
