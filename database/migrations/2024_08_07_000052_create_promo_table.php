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
        Schema::create('promo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("restaurant_id")->unsigned();
            $table->string('name');
            $table->string('description');
            $table->string('schedule');
            $table->foreign('restaurant_id')->references('id')->on('restaurant');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo');
    }
};
