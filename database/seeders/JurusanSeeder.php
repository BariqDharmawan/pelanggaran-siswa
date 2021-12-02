<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create( [
            'nama_jurusan'=>'BDP',
            'keterangan'=>'sklaj fklasj falkjkl'
        ] );



        Jurusan::create( [
            'nama_jurusan'=>'RPL',
            'keterangan'=>'kslaj flskaa'
        ] );
    }
}
