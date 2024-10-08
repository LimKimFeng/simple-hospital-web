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
        Schema::create("pasiens", function(Blueprint $table) {
            $table->string('idPasien', 50)->primary();
            $table->string("namaPasien", 50);
            $table->string("jenis_kelamin", 15);
            $table->string("alamat", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("pasiens");
    }
};
