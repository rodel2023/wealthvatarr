<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Oto1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oto1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('day');
            $table->string('month');
            $table->string('description');
            $table->string('file_name');
            $table->string('file_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oto1s');
    }
}
