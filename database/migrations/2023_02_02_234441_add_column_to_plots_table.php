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
        Schema::table('plots', function (Blueprint $table) {
            $table->String('description')->after('price')->nullable();
        });
    }

    public function down()
    {
        Schema::table('plots', function (Blueprint $table) {
            //
        });
    }
};
