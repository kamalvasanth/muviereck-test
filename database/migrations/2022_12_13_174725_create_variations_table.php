<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variations', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignId('product_id');
            $table->foreignId('variant_group_id');
            $table->foreignId('price_unit_id');
            $table->foreignId('stock_unit_id');
            $table->string('stock_status');
            $table->integer('price_quantity');
            $table->integer('stock_quantity');
            $table->integer('minimum_order_quantity');
            $table->time('delivery_time');
            $table->string('delivery_time_type');
            $table->float('delivery_charge');
            $table->float('price');
            $table->enum('cod_available', ['yes', 'no'])->nullable();
            $table->string('discount_type');
            $table->float('discount_percent');
            $table->float('discount_amount');
            $table->float('tax_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variations');
    }
};
