@extends('layouts.app')

@section('title-page', 'Tambah Jenis Pelanggaran')

@section('content')
<div class="card">
    <div class="card-primary">
      <div class="card-body">
        <form method="POST" class="needs-validation">
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
            <button type="submit" name="submit" class="btn btn-blue" tabindex="1">
              <i class="ion ion-android-checkbox-outline" style="margin-right: 10px"></i>
              Simpan
            </button>
            <?php
            // include "../koneksi_db.php";
            // if(isset($_POST['submit'])){

            //   $jenis_pelanggaran = $_POST['jenis_pelanggaran'];
            //   $poin = $_POST['poin'];

            //   $simpan_data = mysqli_query($koneksi, "INSERT INTO JENIS_PELANGGARAN (jenis_pelanggaran, poin) VALUES ('$jenis_pelanggaran', '$poin')");

            //   if ($simpan_data) {
            //     echo "<script>window.alert('Data berhasil disimpan!');
            //     window.location.href='data_jenispelanggaran.php';
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
