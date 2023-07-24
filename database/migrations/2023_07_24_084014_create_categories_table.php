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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug');
            $table->mediumText('description');
            $table->string('image');
            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->mediumText('meta_description');
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
        Schema::dropIfExists('categories');
    }
};
