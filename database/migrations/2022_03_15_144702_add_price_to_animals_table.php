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
        Schema::table('horses', function (Blueprint $table) {
            $table->integer('price')->default(400);
        });

        Schema::table('cows', function (Blueprint $table) {
            $table->integer('price')->default(250);
        });

        Schema::table('sheep', function (Blueprint $table) {
            $table->integer('price')->default(100);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horses', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('cows', function (Blueprint $table) {
            $table->dropColumn('price');
        });

        Schema::table('sheep', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};
