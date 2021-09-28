<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTIKBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_i_k_barangs', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nomor');
            $table->string('nama');
            $table->string('penerbit');
            $table->string('pengarang');
            $table->date('waktu');
            $table->string('daerah');
            $table->string('pencetak');
            $table->string('nama_pimpinan');
            $table->string('alamat_penerbit');
            $table->string('alamat_percetakan');
            $table->string('jumlah_oplah');
            $table->string('kecamatan');
            $table->string('kasus')->nullable();
            $table->string('background')->nullable();
            $table->string('tindakan')->nullable();
            $table->string('tindakan_kejaksaan')->nullable();
            $table->string('tindakan_kepolisian')->nullable();
            $table->string('tindakan_pengadilan')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('t_i_k_barangs');
    }
}
