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
        Schema::create('proyek', function (Blueprint $table) {
            $table->id();
            $table->string('noKelompok');
            $table->string('kelas');
            $table->string('semester');
            $table->string('anggota');
            $table->string('namaPO');
            $table->string('topik');
            $table->string('deskripsi');
            $table->string('nmAsisten');
            $table->string('institusi');
            $table->year('tahun');
            $table->string('nmPengaju');
            $table->string('nimPengaju');
            $table->string('emailPengaju');
            $table->json('file')->nullable();
            $table->string('status')->nullable();
            $table->string('ket')->nullable();
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
        Schema::dropIfExists('proyek');
    }
};
