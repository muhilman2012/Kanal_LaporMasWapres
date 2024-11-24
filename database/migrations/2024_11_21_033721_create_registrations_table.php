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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_identitas')->unique();
            $table->string('no_hp');
            $table->string('email')->nullable();
            $table->string('nama_pendamping')->nullable();
            $table->date('tanggal_reservasi');
            $table->string('jam_reservasi');
            $table->string('qr_code_path')->nullable();
            $table->string('foto_ktp')->nullable();
            $table->boolean('difabel')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
