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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cust_id');
            $table->string('cust_fname', 50);
            $table->string('cust_lname', 50);
            $table->string('cust_phone', 30);
            $table->string('cust_addr1', 80);
            $table->string('cust_addr2', 80)->nullable();
            $table->string('cust_postcode', 50);
            $table->string('cust_email', 70);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
