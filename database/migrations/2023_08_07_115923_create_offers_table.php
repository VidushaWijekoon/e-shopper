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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->tinyText('description');
            $table->date('offer_starting_date');
            $table->date('offer_ends_at');
            $table->integer('offer_discount');
            $table->integer('offer_price');
            $table->string('image');
            $table->tinyInteger('active_status')->default('0')->nullable()->comment('0=Inactive, 1=Active');
            $table->tinyInteger('approve_status')->default('0')->nullable()->comment('0=Pending, 1=Approve');
            $table->unsignedBigInteger('created_by')->default('0')->nullable();
            $table->unsignedBigInteger('approved_by')->default('0')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};