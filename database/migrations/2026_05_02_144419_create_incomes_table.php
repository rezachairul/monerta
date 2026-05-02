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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 15, 2); // nominal
            $table->string('source'); // dari mana uangnya
            $table->string('image')->nullable(); // optional gambar bukti
            $table->text('note')->nullable(); // optional catatan
            $table->timestamp('date')->nullable(); // tanggal pemasukan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
