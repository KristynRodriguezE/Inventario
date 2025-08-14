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
            $table->string('Name',255);
            $table->float('Price');
            $table->string('Status', 40);
            $table->string('Code', 40)->unique();
            $table->string('Current_Quantity', 40);
            $table->string('Type', 40);
            $table->string('Unit_measurement', 40);
            $table->string('Expiration_date', 40)->nullable();

            $table->integer('mark_id')->unsigned();
            $table->foreign('mark_id')->references('id')->on('marks')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

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
