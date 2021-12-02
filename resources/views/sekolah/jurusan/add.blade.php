@extends('layouts.app')

@section('title-page', 'Tambah Data Jurusan')

@section('content')
<div class="card">
    <div class="card-primary">
        <div class="card-body">
            <form method="POST" class="needs-validation">
                <div class="form-group">
                    <label>Nama Jurusan</label>
                    <input type="text" class="form-control" name="nama_jurusan" tabindex="1" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" tabindex="1" required>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-blue" tabindex="1">
                        <i class="ion ion-android-checkbox-outline" style="margin-right: 10px"></i>
                        Simpan
                    </button>
                    <?php
            // include "../koneksi_db.php";
            // if(isset($_POST['submit'])){

            //   $nama_jurusan = $_POST['nama_jurusan'];
            //   $keterangan = $_POST['keterangan'];

            //   $simpan_data = mysqli_query($koneksi, "INSERT INTO JURUSAN (nama_jurusan, keterangan) VALUES ('$nama_jurusan', '$keterangan')");

            //   if ($simpan_data) {
            //     echo "<script>window.alert('Data berhasil disimpan!');
            //     window.location.href='data_jurusan.php';
            //     </script>";
            //   }
            //   else {
            //     echo "<script>window.alert('Data gagal disimpan!');
            //     </script>";
            //   }
            // }
            ?>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
