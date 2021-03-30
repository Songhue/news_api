<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubPhemantariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_phemantaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject')->nullable();
            $table->string('atten')->nullable();
            $table->string('midterm')->nullable();
            $table->string('assignment')->nullable();
            $table->string('Final')->nullable();
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
        Schema::dropIfExists('sub_phemantaries');
    }
}
