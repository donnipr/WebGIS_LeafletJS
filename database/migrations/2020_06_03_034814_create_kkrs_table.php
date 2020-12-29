<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKkrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kkrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_kkr');
            $table->string('tahun_kkr');
            $table->string('nama_pemohon');
            $table->string('alamat_pemohon');
            $table->string('lokasi_izin');
            $table->string('padukuhan');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('luas');
            $table->string('status_tanah');
            $table->string('peruntukan');
            $table->string('latlong');
            $table->string('pola_ruang');
            $table->string('keterangan');
            $table->string('upload');
            $table->string('shpfile');
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
        Schema::dropIfExists('kkrs');
    }
}
