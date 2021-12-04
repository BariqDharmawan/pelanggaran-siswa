@extends('layouts.app')

@section('title-page', 'Tambah Jenis Pelanggaran')

@section('content')
<div class="card">
    <div class="card-primary">
      <div class="card-body">
        <form method="POST" class="needs-validation" action="{{ route('sekolah.jenis-pelanggaran.store') }}">
            @csrf
          <div class="form-group">
            <label>Jenis Pelanggaran</label>
            <input type="text" class="form-control" name="jenis_pelanggaran" tabindex="1" required>
          </div>
          <div class="form-group">
            <label>Poin</label>
            <input type="number" class="form-control" name="poin" tabindex="1" required>
          </div>
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-blue" tabindex="1">
              <i class="ion ion-android-checkbox-outline" style="margin-right: 10px"></i>
              Simpan
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
