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
        Schema::create("applications", function (Blueprint $table) {
            $table->id("id_aplikasi")->autoIncrement();
            $table->string("nama_aplikasi");
            $table->date("tanggal_rilis_aplikasi");
            $table->string("deskripsi_aplikasi");
            $table->integer("jumlah_download");
            $table->string("support_sistem");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("applications");
    }
};
