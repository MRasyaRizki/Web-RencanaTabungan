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
        Schema::create('menabungs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tabungan_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('nominal');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menabungs');
    }
};
