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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->decimal('price', 8, 2); // E.g., 129.00
        $table->decimal('original_price', 8, 2)->nullable(); // For the crossed-out price
        $table->integer('discount_percentage')->nullable(); // E.g., 40 for -40%
        $table->longText('image_url')->nullable();
        $table->integer('stock')->default(0);
        $table->string('category')->default('General');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
