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
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('brand_id');
            $table->longText('product_information');
            $table->longText('additional_information');
            $table->mediumText('short_description');
            $table->bigInteger('product_original_price');
            $table->bigInteger('product_selling_price');
            $table->tinyInteger('product_discount_percent');
            $table->tinyInteger('product_quantity');
            $table->tinyInteger('tranding')->default('0');
            $table->tinyInteger('active_status')->default('0')->nullable()->comment('0=Inactive, 1=Active');
            $table->tinyInteger('approve_status')->default('0')->nullable()->comment('0=Pending, 1=Approve');
            $table->string('product_meta_title');
            $table->string('product_meta_keyword');
            $table->longText('product_meta_description');
            $table->unsignedBigInteger('created_by')->default('0')->nullable();
            $table->unsignedBigInteger('approved_by')->default('0')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
