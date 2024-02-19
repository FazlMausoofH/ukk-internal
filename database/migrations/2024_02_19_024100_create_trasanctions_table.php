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
        Schema::create('trasanctions', function (Blueprint $table) {
            $table->id();
            // $table->foreign('menu_id')->references('id')->on('menus');
            $table->string('nama_pelanggan')->nullable()->default(null);
            $table->string('nomor_unik')->nullable()->default(null);
            $table->string('uang_bayar')->nullable()->default(null);
            $table->string('uang_kembali')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trasanctions');
    }
};
