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
        Schema::create('dosen2', function (Blueprint $table) {
            $table->id();
            $table->string('nama' , 50);
            $table->string('nip' , 10)->unique();
            $table->string('email' , 50)->unique();
            $table->string('alamat');
            $table->string('jurusan');
            $table->string('no_hp' , 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen2');
    }
};
