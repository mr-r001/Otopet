<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataWNISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_w_n_i_s', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nik');
            $table->string('name');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->unsignedSmallInteger('bangsa_id');
            $table->string('kewarganegaraan')->default('WNI');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->string('phone');
            $table->unsignedSmallInteger('agama_id');
            $table->unsignedSmallInteger('pendidikan_id');
            $table->unsignedSmallInteger('pekerjaan_id');
            $table->string('alamat_kantor');
            $table->unsignedSmallInteger('perkawinan_id');
            $table->string('legitimasi_perkawinan');
            $table->string('tempat_perkawinan');
            $table->date('tanggal_perkawinan');
            $table->timestamps();

            $table->foreign('bangsa_id')->references('id')->on('suku_bangsas')->onDelete('cascade');
            $table->foreign('agama_id')->references('id')->on('agamas')->onDelete('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onDelete('cascade');
            $table->foreign('pekerjaan_id')->references('id')->on('pekerjaans')->onDelete('cascade');
            $table->foreign('perkawinan_id')->references('id')->on('status_perkawinans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata_w_n_i_s');
    }
}
