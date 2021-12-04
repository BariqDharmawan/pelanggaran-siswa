@extends('layouts.app')

@section('title-page', 'Rincian pelanggaran')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Tabel Rincian Pelanggaran Kamu</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-bordered table-striped" width="100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Jenis Pelanggaran</th>
                        <th>Poin</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggaran as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data['jenis_pelanggaran']  }}</td>
                        <td>{{ $data['poin']  }}</td>
                        <td>{{ $data['tanggal']->format('d/M/Y')  }}</td>
                        <td>{{ $data['keterangan']  }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
