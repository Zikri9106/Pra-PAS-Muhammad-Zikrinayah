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
        Schema::create("developers", function (Blueprint $table) {
            $table->id("id_developer")->autoIncrement();
            $table->string("gambar_perusahaan");
            $table->string("nama_perusahaan");
            $table->date("tanggal_didirikan");
            $table->string("deskripsi_perusahaan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("developers");
    }
};
