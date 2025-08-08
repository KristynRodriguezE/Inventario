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
            $table->increments('id');
            $table->string('name',255);
            $table->float('price');
            $table->varchar('status', 40);
            $table->varchar('code', 40)->unique();
            $table->varchar('Current_Quantity', 40);
            $table->varchar('type', 40);
            $table->varchar('unit_measurement', 40);
            $table->varchar('Expiration_date', 40)->nullable();
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
