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
            // $table->id();
            $table->increments('product_id');
            $table->string('p_name');
            $table->string('p_price_old');
            $table->string('p_price_new');
            $table->string('p_description');
            $table->string('p_color');
            $table->string('p_type');
            $table->string('p_quantity');
            $table->string('p_photo1');
            $table->string('p_photo2');
            $table->string('p_photo3');
            $table->string('p_photo4');
            $table->string('p_photo5');
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
