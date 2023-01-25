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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('product_sub_category_id');
            $table->unsignedBiginteger('product_varient_value_id');
            $table->string('name');
            $table->string('sku');
            $table->unsignedBiginteger('price_decision_factor_id');
            $table->longText('description');
            $table->double('price');
            $table->date('production_date');
            $table->string('transaction_number');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('product_sub_category_id')->references('id')->on('product_sub_categories')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('product_varient_value_id')->references('id')->on('product_varient_values')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('price_decision_factor_id')->references('id')->on('price_decision_factors')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
