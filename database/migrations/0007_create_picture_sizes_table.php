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
        Schema::create('picture_sizes', function (Blueprint $table) {
            $table->id('pic_size_id');
            $table->string('pic_size_label', 150);
            $table->integer('pic_size_width');
            $table->integer('pic_size_height');
            $table->decimal('pic_size_price', 10, 2)->default(0.00);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('picture_sizes');
    }
};
