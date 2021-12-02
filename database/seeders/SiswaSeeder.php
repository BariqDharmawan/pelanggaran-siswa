<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'NIS'=>'1910',
            'nama_siswa'=>'Almira Van Fadhilla',
            'nama_kelas'=>'X MIPA 1',
            'nama_jurusan'=>'MIPA',
            'jenis_kelamin'=>'Perempuan',
            'alamat'=>'Lebak, Banten',
            'no_telepon'=>'085817922085',
            'id_akun'=>'SW01',
            'total_poin'=>29
        ]);



        Siswa::create([
            'NIS'=>'891738',
            'nama_siswa'=>'Bariq',
            'nama_kelas'=>'BDP 1',
            'nama_jurusan'=>'BDP',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Jln. Swadaya gudang baru',
            'no_telepon'=>'085555555',
            'id_akun'=>'SW02',
            'total_poin'=>205
        ]);



        Siswa::create([
            'NIS'=>'8979183',
            'nama_siswa'=>'Jojo',
            'nama_kelas'=>'BDP A',
            'nama_jurusan'=>'BDP',
            'jenis_kelamin'=>'Laki-laki',
            'alamat'=>'Jln. Swadaya gudang baru',
            'no_telepon'=>'87987987',
            'id_akun'=>'28281',
            'total_poin'=>0
        ]);


    }
}
