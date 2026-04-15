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
        Schema::create('experiences_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('experiences_id')->constrained('experiences')->onDelete('cascade');
            $table->string('information');
            $table->float('rate');
            $table->integer('review');
            $table->string('host_name');
            $table->string('host_information');
            $table->text('maps');
            $table->string('address');
            $table->string('what_you_do');
            $table->text('step1');
            $table->text('step2');
            $table->text('step3');
            $table->text('step4');
            $table->text('step5');
            $table->text('step6');
            $table->text('step7');
            $table->text('step8');
            $table->text('step9');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences_detail');
    }
};
