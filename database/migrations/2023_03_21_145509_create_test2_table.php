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
        Schema::create('test2', function (Blueprint $table) {
            $table->id();
            $table->enum('description', ['Pembelian', 'Penjualan']);
            $table->date('date');
            $table->integer('qty');
            $table->decimal('cost', 10, 2);
            $table->decimal('price', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->integer('qty_balance');
            $table->decimal('value_balance', 10, 2);
            $table->decimal('hpp', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test2');
    }
};
