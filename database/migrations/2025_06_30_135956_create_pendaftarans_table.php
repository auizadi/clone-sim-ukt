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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();

            // Relasi dengan user
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Data pendaftaran
            
            $table->enum('kategori', ['penurunan_ukt', 'bantuan_ukt', 'perpanjangan_ukt']);

            // Status dan verifikasi
            $table->enum('status', ['draft', 'dikirim', 'diproses', 'diterima', 'ditolak'])->default('draft');
            $table->text('catatan_admin')->nullable();
            $table->timestamp('dikirim_pada')->nullable();

            // Dokumen pendukung (path/link file)
            $table->json('dokumen')->nullable(); // atau kolom terpisah untuk setiap dokumen

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
