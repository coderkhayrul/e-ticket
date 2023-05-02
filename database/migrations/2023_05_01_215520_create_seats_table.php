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
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bogi_id');
            $table->unsignedBigInteger('type')->default(0)->comment('0= Shovon, 1= Shovon Chair');
            $table->unsignedBigInteger('booked')->default(0)->comment('0= open, 1= booked');
            $table->string('name');
            $table->timestamps();

            $table->foreign('bogi_id')->references('id')->on('bogis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
