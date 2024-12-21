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
        Schema::create('investasi_potensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_potensi');
            $table->string('investor');
            $table->float('jumlah_investasi');
            $table->date('tanggal_investasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investasi_potensi');
    }
};
