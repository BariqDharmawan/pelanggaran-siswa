<?php

namespace Database\Seeders;

use App\Models\Sanksi;
use Illuminate\Database\Seeder;

class SanksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sanksi::create( [
            'rentang'=>'s.d 40',
            'tindakan_sekolah'=>'Berkomunikasi dengan orang tua/wali siswa dan memberikan bimbingan serta perhatian.',
            'sanksi'=>'Teguran tertulis dan surat perjanjian pertama.',
            'pelaksana'=>'Wali Kelas'
            ] );



            Sanksi::create( [
            'rentang'=>'41 s.d 70',
            'tindakan_sekolah'=>'Berkomunikasi dengan orang tua/wali siswa dan memberikan bimbingan serta perhatian.',
            'sanksi'=>'Teguran tertulis dan surat perjanjian kedua.',
            'pelaksana'=>'Wali Kelas dan BK'
            ] );



            Sanksi::create( [
            'rentang'=>'71 s.d 99',
            'tindakan_sekolah'=>'Berkomunikasi dengan orang tua/wali siswa dan memberi bimbingan serta perhatian.',
            'sanksi'=>'Surat perjanjian tertulis bermaterai dan skorsing maksimal 3 hari efektif, diketahui Kepala Sekolah.',
            'pelaksana'=>'Wali Kelas dan BK Wakasek Kesiswaan diketahui Kepala Sekolah'
            ] );



            Sanksi::create( [
            'rentang'=>'s.d 100',
            'tindakan_sekolah'=>'Berkomunikasi dengan orang tua/wali siswa dan memberi bimbingan serta perhatian.',
            'sanksi'=>'Dikembalikan kepada orang tua secara sepihak.',
            'pelaksana'=>'Pleno Guru'
            ] );
    }
}
