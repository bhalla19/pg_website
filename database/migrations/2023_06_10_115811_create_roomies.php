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
        Schema::create('roomies', function (Blueprint $table) {
            $table->id('roomie_Id');
            $table->string('Name_First');
            $table->string('Name_Last');
            $table->string('Email');
            $table->string('PhoneNumber_countrycode');
            $table->string('Dropdown');
            $table->string('Dropdown1');
            $table->string('Radio');
            $table->string('Radio1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomies');
    }
};
