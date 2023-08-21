<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tesell_clothes', function (Blueprint $table) {
            $table->id();
            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->string('size', 3);
            $table->string('colour');
            $table->integer('price');
            $table->string('category');
            $table->timestamp('upload_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tesell_clothes');
    }
};
