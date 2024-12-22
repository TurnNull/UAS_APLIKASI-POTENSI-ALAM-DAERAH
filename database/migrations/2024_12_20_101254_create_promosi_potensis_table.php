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
        Schema::create('promosi_potensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_potensi');
            $table->string('media_promosi');
            $table->date('tanggal_publikasi');
            $table->string('status_promosi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promosi_potensi');
    }
};
