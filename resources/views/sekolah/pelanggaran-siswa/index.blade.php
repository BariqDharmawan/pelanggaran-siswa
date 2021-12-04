@extends('layouts.app')

@section('title-page', 'Pelanggaran Siswa')

@section('content')

<a href="{{ route('sekolah.pelanggaran-siswa.create') }}" class="btn btn-blue col-sm-12 col-lg-3"
style="margin-bottom: 25px">
    <i class="ion ion-plus-round" style="margin-right: 10px"></i>
    Tambah Pelanggaran Siswa
</a>

<div class="card">
    <div class="card-header">
        <div class="float-right">
        </div>
        <h4>Tabel Data Pelanggaran Siswa</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Pelanggaran</th>
                        <th>Poin</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggaranSiswa as $data)
                    <tr>
                        <td>{{ $data['NIS'] }}</td>
                        <td>{{ $data['nama_siswa'] }}</td>
                        <td>{{ $data['jenis_pelanggaran'] }}</td>
                        <td>{{ $data['poin'] }}</td>
                        <td>{{ $data['keterangan'] }}</td>
                        <td>{{ $data['tanggal']->format('d M Y') }}</td>
                        <td>
                            <a href='{{ route('sekolah.pelanggaran-siswa.edit', $data->id) }}'
                            class='btn btn-sm btn-blue' style='margin: 5px'>
                                <span class='ion-android-create' aria-hidden='true'></span>
                            </a>
                            <form action="{{ route('sekolah.pelanggaran-siswa.destroy', $data->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class='btn btn-sm btn-danger'
                                    style='margin: 5px'>
                                    <span class='ion-trash-a' aria-hidden='true'></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
