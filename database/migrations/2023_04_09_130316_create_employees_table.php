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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Username');
            $table->string('Password');
            $table->string('Nama');
            $table->string('Alamat');
            $table->bigInteger('No_telp');
            $table->enum('Bagian', ['Petugas Ruang Masuk', 'Petugas Ruang Keluar', 'Petugas Ruang Ruang']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
