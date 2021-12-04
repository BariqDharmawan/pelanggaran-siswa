<?php

namespace Database\Seeders;

use App\Models\PelanggaranSiswa;
use Illuminate\Database\Seeder;

class PelanggaranSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PelanggaranSiswa::create( [
            'NIS'=>891738,
            'nama_siswa'=>'Bariq',
            'jenis_pelanggaran'=>'terlambat',
            'poin'=>5,
            'keterangan'=>'ksalj fklasjfkl',
            'tanggal'=>'2021-11-30'
        ]);



        PelanggaranSiswa::create( [
            'NIS'=>1910,
            'nama_siswa'=>'Almira Van Fadhilla',
            'jenis_pelanggaran'=>'terlambat',
            'poin'=>10,
            'keterangan'=>'sa fsa asf ',
            'tanggal'=>'2021-12-16'
        ]);



        PelanggaranSiswa::create( [
            'NIS'=>891738,
            'nama_siswa'=>'Bariq',
            'jenis_pelanggaran'=>'terlambat',
            'poin'=>19,
            'keterangan'=>'sa asfasfas',
            'tanggal'=>'2021-12-15'
        ]);



        PelanggaranSiswa::create( [
            'NIS'=>891738,
            'nama_siswa'=>'Bariq',
            'jenis_pelanggaran'=>'terlambat',
            'poin'=>100,
            'keterangan'=>'saf',
            'tanggal'=>'2021-12-14'
        ]);



        PelanggaranSiswa::create( [
            'NIS'=>891738,
            'nama_siswa'=>'Bariq',
            'jenis_pelanggaran'=>'terlambat',
            'poin'=>100,
            'keterangan'=>' sa fa fasf ',
            'tanggal'=>'2021-12-08'
        ]);
    }
}
