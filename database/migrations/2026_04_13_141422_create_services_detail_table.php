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
        Schema::create('services_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('services_id')->constrained('services')->onDelete('cascade');
            $table->text('img1');
            $table->text('img_host');
            $table->string('service_name');
            $table->string('description');
            $table->string('information');
            $table->string('service');
            $table->integer('review');
            $table->float('rate');
            $table->integer('price');
            $table->integer('guest');
            $table->text('img_service1');
            $table->text('img_service2');
            $table->text('img_service3');
            $table->text('img_service4');
            $table->text('img_service5');
            $table->text('img_service6');
            $table->string('des_service1');
            $table->string('des_service2');
            $table->string('des_service3');
            $table->string('des_service4');
            $table->string('des_service5');
            $table->string('des_service6');
            $table->string('service_recomend1');
            $table->string('service_recomend2');
            $table->string('service_recomend3');
            $table->string('service_recomend4');
            $table->string('service_recomend5');
            $table->string('service_recomend6');
            $table->integer('price1');
            $table->integer('price2');
            $table->integer('price3');
            $table->integer('price4');
            $table->integer('price5');
            $table->integer('price6');
            $table->string('time');
            $table->string('host_name');
            $table->string('my_qualifications1');
            $table->string('my_qualifications2');
            $table->string('my_qualifications3');
            $table->string('my_qualifications4');
            $table->string('qualification_information1');
            $table->string('qualification_information2');
            $table->string('qualification_information3');
            $table->string('qualification_information4');
            $table->text('img_portofolio1');
            $table->text('img_portofolio2');
            $table->text('img_portofolio3');
            $table->string('address');
            $table->string('maps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_detail');
    }
};
