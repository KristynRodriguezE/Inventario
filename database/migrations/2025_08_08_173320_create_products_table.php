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
            $table->decimal('purchase_price', 10, 2);
            $table->decimal('sales_price', 10, 2);
            $table->string('code', 40)->unique();
            $table->string('current_Quantity', 40);
            $table->string('type', 40);
            $table->string('unit_measurement', 40);
            $table->string('expiration_date', 40)->nullable();

            $table->integer('mark_id')->unsigned();
            $table->foreign('mark_id')->references('id')->on('marks')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');

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
