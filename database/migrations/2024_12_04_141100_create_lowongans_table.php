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
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->string('gaji');
            $table->enum('kategori', ['IT', 'Bisnis', 'Manufaktur', 'Kesehatan', 'Lainnya']); // Pilihan kategori
            $table->enum('jenis_lowongan', ['Magang', 'Full-Time', 'Remote']); // Pilihan jenis lowongan
            $table->text('syarat_ketentuan');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
