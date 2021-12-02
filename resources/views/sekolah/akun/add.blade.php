@extends('layouts.app')

@section('title-page', 'Tambah Akun Pengguna')

@section('content')
<div class="card">
    <div class="card-primary">
      <div class="card-body">
       <form method="POST" class="needs-validation">
        <div class="form-group">
          <label>ID</label>
          <input type="text" class="form-control" name="id_akun" tabindex="1" required>
        </div>
        <div class="form-group">
          <label>Nama Pengguna</label>
          <input type="text" class="form-control" name="nama_pengguna" tabindex="1" required>
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
          <button type="submit" name="submit" class="btn btn-blue" tabindex="1">
            <i class="ion ion-android-checkbox-outline" style="margin-right: 10px"></i>
            Simpan
          </button>
          <?php
        //   include "../koneksi_db.php";
        //   if(isset($_POST['submit'])){

        //     $id_akun = $_POST['id_akun'];
        //     $nama_pengguna = $_POST['nama_pengguna'];
        //     $username = $_POST['username'];
        //     $password = $_POST['password'];
        //     $role = $_POST['role'];

        //     $simpan_data = mysqli_query($koneksi, "INSERT INTO USER VALUES ('$id_akun', '$nama_pengguna', '$username', '$password', '$role')");

        //     if ($simpan_data) {
        //       echo "<script>window.alert('Data berhasil disimpan!');
        //       window.location.href='data_akun.php';
        //       </script>";
        //     }
        //     else {
        //       echo "<script>window.alert('Data gagal disimpan!');
        //       </script>";
        //     }
        //   }
          ?>
        </div>
      </form>
    </div>
  </div>
@endsection
