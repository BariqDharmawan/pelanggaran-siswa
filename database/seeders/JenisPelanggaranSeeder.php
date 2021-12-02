<?php

namespace Database\Seeders;

use App\Models\JenisPelanggaran;
use Illuminate\Database\Seeder;

class JenisPelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisPelanggaran::create([
            'jenis_pelanggaran'=>'terlambat',
            'poin'=>5
        ]);
    }
}
