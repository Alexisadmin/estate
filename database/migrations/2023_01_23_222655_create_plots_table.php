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
        Schema::create('plots', function (Blueprint $table)
         {
            $table->id();
            $table->string('name');
            $table->string('status')->default('Waiting');
            $table->string('surname');
            $table->string('province');
            $table->string('district');
            $table->string('sector');
            $table->string('cell');
            $table->string('village');
            $table->string('width');
            $table->string('length');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->string('price');
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
        Schema::dropIfExists('plots');
    }
};
