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
