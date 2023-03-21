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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->date('date');
            $table->integer('qty');
            $table->decimal('cost', 8, 2)->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('total_cost', 10, 2)->nullable();
            $table->integer('qty_balance');
            $table->decimal('value_balance', 10, 2);
            $table->decimal('hpp', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
