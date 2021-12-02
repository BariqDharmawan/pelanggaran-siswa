@extends('layouts.app')

@section('title-page', 'Tambah Data Jurusan')

@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <form method="POST" class="needs-validation">
                <div class="form-group">
                  <label>Nama Kelas</label>
                  <input type="text" class="form-control" name="nama_kelas" tabindex="1" required>
                </div>
                <div class="form-group">
                  <label>Jurusan</label>
                  <select name="nama_jurusan" class="form-control">
                    @forelse ($listJurusan as $jurusan)
                        <option>{{ $jurusan->nama_jurusan }}</option>
                    @empty
                        <option disabled selected>Tidak ada jurusan</option>
                    @endforelse
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

                //     $nama_kelas = $_POST['nama_kelas'];
                //     $nama_jurusan = $_POST['nama_jurusan'];

                //     $simpan_data = mysqli_query($koneksi, "INSERT INTO KELAS (nama_kelas, nama_jurusan) VALUES ('$nama_kelas', '$nama_jurusan')");

                //     if ($simpan_data) {
                //       echo "<script>window.alert('Data berhasil disimpan!');
                //       window.location.href='data_kelas.php';
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
</div>
@endsection
