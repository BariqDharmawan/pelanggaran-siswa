<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SiswaSeeder::class,
            SanksiSeeder::class,
            PelanggaranSeeder::class,
            KelasSeeder::class,
            JurusanSeeder::class,
            JenisPelanggaranSeeder::class
        ]);
    }
}
