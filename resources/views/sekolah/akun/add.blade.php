@extends('layouts.app')

@section('title-page', 'Tambah Akun Pengguna')

@section('content')
<div class="card">
    <div class="card-primary">
      <div class="card-body">
       <form method="POST" class="needs-validation" action="{{ route('sekolah.akun.store') }}">
        @csrf
        <div class="form-group">
          <label>ID</label>
          <input type="text" class="form-control" name="id_akun" tabindex="1" required>
        </div>
        <div class="form-group">
          <label>Nama Pengguna</label>
          <input type="text" class="form-control" name="nama" tabindex="1" required>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="username" tabindex="1" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" class="form-control" name="password" tabindex="1" required>
        </div>
        <div class="form-group">
          <label>Role</label>
          <select name="role" class="form-control">
            <option value="Admin">Admin</option>
            <option value="Pegawai">Pegawai</option>
            <option value="Siswa">Siswa</option>
          </select>
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
@endsection
