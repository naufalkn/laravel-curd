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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->enum('kelamin', ['Laki Laki','Perempuan']);
            $table->string('alamat');
            $table->enum('status', ['Belum Kawin','Kawin', 'Cerai Hidup','Cerai Mati' ]);
            $table->string('pekerjaan');
            $table->enum('kewarganegaraan', ['WNI','WNA']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('golongan', ['A','B','O','AB']);
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
        Schema::dropIfExists('penduduk');
    }
};
