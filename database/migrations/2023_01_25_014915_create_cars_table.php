<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_name');
            $table->string('plate');
            $table->string('status')->default('Waiting');
            $table->string('province');
            $table->string('district');
            $table->string('owner');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->string('price');
            $table->string('usage');
            $table->string('front_image')->nullable();
            $table->string('side_image')->nullable();
            $table->string('view_1')->nullable();
            $table->string('view_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
