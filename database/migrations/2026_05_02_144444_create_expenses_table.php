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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 15, 2); // nominal
            $table->string('description');  // untuk apa uangnya
            $table->string('category'); // kategori pengeluaran
            $table->string('image')->nullable(); // optional gambar bukti/struk pengeluaran
            $table->text('note')->nullable(); // optional catatan
            $table->timestamp('date')->nullable(); // tanggal pengeluaran
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
