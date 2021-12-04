<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggaranSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggaran_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('NIS');
            $table->string('nama_siswa');
            $table->string('jenis_pelanggaran');
            $table->string('poin');
            $table->text('keterangan');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggaran_siswas');
    }
}
