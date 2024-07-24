<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->string('idKunjungan', 11)->primary();
            $table->string('idPasien', 10);
            $table->string('idDokter', 11);
            $table->date('tanggal');
            $table->text('keluhan');
            $table->timestamps();

            $table->foreign('idPasien')->references('idPasien')->on('pasiens')->onDelete('cascade');
            $table->foreign('idDokter')->references('idDokter')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('kunjungan');
    }
};
