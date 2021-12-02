<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create( [
            'id_akun'=>'28281',
            'nama'=>'Jojo',
            'username'=>'jojo',
            'password'=>'gakadapassword',
            'role'=>'siswa'
        ]);



        User::create([
            'id_akun'=>'ADM01',
            'nama'=>'Rachma Adzima',
            'username'=>'admin_ama',
            'password'=>'admin123',
            'role'=>'admin'
        ]);



        User::create([
            'id_akun'=>'PGW01',
            'nama'=>'Jasmine Athira',
            'username'=>'pegawai_jasmine',
            'password'=>'pegawai123',
            'role'=>'pegawai'
        ]);



        User::create([
            'id_akun'=>'SW01',
            'nama'=>'Almira Van Fadhilla',
            'username'=>'almiravan',
            'password'=>'mira123',
            'role'=>'admin'
        ]);



        User::create([
            'id_akun'=>'SW02',
            'nama'=>'Bariq',
            'username'=>'bariq',
            'password'=>'gakadapassword',
            'role'=>'siswa'
        ]);
    }
}
