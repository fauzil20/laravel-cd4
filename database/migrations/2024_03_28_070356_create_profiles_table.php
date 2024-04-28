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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('nip')->unique();
            $table->string('status');
            $table->string('level');
            $table->string('posisi');
            $table->string('kelas');
            $table->string('tahunMasuk');
            $table->string('namaLengkap')->unique();
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('alamat');
            $table->string('kabupatenKota');
            $table->string('provinsi');
            $table->string('kodePos');
            $table->string('jenisKelamin');
            $table->string('golonganDarah');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->integer('nik')->unique();
            $table->string('namaIbuKandung');
            $table->string('namaAyahKandung');
            $table->integer('nomorRekening')->unique();
            $table->string('namaBank');
            $table->string('namaPemilikRekening');
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
        Schema::dropIfExists('profiles');
    }
};
