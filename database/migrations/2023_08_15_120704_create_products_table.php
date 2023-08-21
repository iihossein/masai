<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('en_name')->nullable();
            $table->string('fa_name');
            $table->string('description');
            $table->string('sku', 100);
            $table
                ->foreignId('brand_id')
                ->constrained('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->decimal('price', 20, 3);
            $table->foreignId('discount_id')->nullable()->constrained('discounts')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('discount_amount', 20, 3);
            $table->decimal('final_price', 20, 3);
            $table->Integer('stock');
            $table->string('slug');
            $table->string('guarantee')->nullable();
            $table
                ->foreignId('color_id')
                ->nullable()
                ->constrained('product_colors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->tinyInteger('sold_number')->default(0);
            $table
                ->tinyInteger('marketable')
                ->default(1)
                ->comment('1 => marketable, 0 => is not marketable');
            $table->tinyInteger('status')->default(0);
            $table->integer('viewes');
            $table->integer('likes');
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
