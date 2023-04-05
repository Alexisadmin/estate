<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_name')->nullable();
            $table->string('plate')->nullable();
            $table->string('status')->default('Waiting')->nullable();
            $table->string('province')->nullable();
            $table->string('district')->nullable();
            $table->string('owner')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('price')->nullable();
            $table->string('usage')->nullable();
            $table->string('front_image')->nullable();
            $table->string('side_image')->nullable();
            $table->string('view_1')->nullable();
            $table->string('view_2')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
