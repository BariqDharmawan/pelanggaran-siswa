@extends('layouts.app')

@section('title-page', 'Tambah Akun Pengguna')

@section('content')
<div class="card">
    <div class="card-primary">
      <div class="card-body">
       <form method="POST" class="needs-validation" action="{{ route('sekolah.akun.update', $akun->id_akun) }}">
        @csrf @method('PUT')
        <div class="form-group">
          <label>Nama Pengguna</label>
          <input type="text" class="form-control" name="nama" value="{{ $akun->nama }}" tabindex="1" autofocus required>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="username" tabindex="1" value="{{ $akun->username }}" required>
        </div>
        <div class="form-group">
          <label>Ganti Password</label>
          <input type="text" class="form-control" name="password"
          placeholder="Kosongkan jika tidak ingin ganti password" tabindex="1">
        </div>
        <div class="form-group">
          <label>Role</label>
          <select name="role" class="form-control">
            <option value="Admin" @if ($akun->role == 'Admin') selected @endif>Admin</option>
            <option value="Pegawai" @if ($akun->role == 'Pegawai') selected @endif>Pegawai</option>
            <option value="Siswa" @if ($akun->role == 'Siswa') selected @endif>Siswa</option>
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
