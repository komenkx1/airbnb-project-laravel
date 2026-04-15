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
        Schema::create('accomodation_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('accomodation_id')->constrained('accomodation')->onDelete('cascade');
            $table->string('information_place');
            $table->text('img_1');
            $table->text('img_2');
            $table->text('img_3');
            $table->text('img_4');
            $table->text('img_5');
            $table->string('hotel_name');
            $table->string('country');
            $table->string('guest');
            $table->string('bedroom');
            $table->string('bed');
            $table->string('bath');
            $table->float('rate');
            $table->integer('review');
            $table->text('img_host');
            $table->string('host_name');
            $table->string('time_join');
            $table->string('fasility');
            $table->text('bedroom_img1');
            $table->text('bedroom_img2');
            $table->integer('price');
            $table->string('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accomodation_detail');
    }
};
