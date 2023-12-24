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
        Schema::create('kosts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->text('deskripsi');
            $table->integer('harga_per_bulan');
            $table->integer('kamar_tersedia');
            $table->foreignId('user_id');
            $table->foreignId('gender_id');
            $table->foreignId('kota_id');
            $table->foreignId('provinsi_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosts');
    }
};
