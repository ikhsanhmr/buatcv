<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createformstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formcv', function (Blueprint $table) {
            $table->id('id');
            $table->string('image', 100);
            $table->string('namaLengkap', 100);
            $table->string('tempatLahir', 100);
            $table->date('tanggalLahir', 100);
            $table->string('agama', 100);
            $table->string('nomortelp', 100);
            $table->string('email', 100);
            $table->string('alamat', 100);
            $table->string('kota', 100);
            $table->string('negara', 100);
            $table->string('jenisKelamin', 100);
            $table->string('statusPernikahan', 100);
            $table->text('deskripsiDiri');
            $table->string('gelar', 100);
            $table->string('kotaGelar', 100);
            $table->string('namaInstansi', 100);
            $table->string('mulaiInstansiBulan', 100);
            $table->string('mulaiInstansiTahun', 100);
            $table->string('selesaiInstansiBulan', 100);
            $table->string('selesaiInstansiTahun', 100);
            $table->string('NamaOrganisasi', 100);
            $table->string('mulaiOrganisasiBulan', 100);
            $table->string('mulaiOrganisasiTahun', 100);
            $table->string('selesaiOrganisasiBulan', 100);
            $table->string('selesaiOrganisasiTahun', 100);
            $table->text('deskripsiOrganisasi');
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
        Schema::dropIfExists('formcv');
    }
}
