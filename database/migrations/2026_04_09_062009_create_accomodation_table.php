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
        Schema::create('accomodation', function (Blueprint $table) {
            $table->id();
            $table->string('accomodation_name');
            $table->string('city');
            $table->string('country');
            $table->integer('price');
            $table->string('time');
            $table->boolean('rate');
            $table->text('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomodation');
    }
};
