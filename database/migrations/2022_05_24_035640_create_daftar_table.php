<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('no_wa');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->integer('usia');
            $table->string('agama');
            $table->string('program');
            $table->string('paket');
            $table->string('mapel');
            $table->integer('kelas');
            $table->string('asal_sekolah');
            $table->string('jadwal_hari');
            $table->time('jam_les');
            $table->string('nama_ortu');
            $table->string('no_wa_ortu');
            $table->date('tanggal_mulai_les');
            $table->date('tanggal_registrasi');
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
        Schema::dropIfExists('siswas');
    }
};
