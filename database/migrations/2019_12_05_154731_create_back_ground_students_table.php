<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackGroundStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('back_ground_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('khname')->nullable(); 
            $table->string('enname')->nullable(); 
            $table->string('diploma')->nullable(); 
            $table->string('mention')->nullable(); 
            $table->string('year')->nullable(); 
            $table->string('mental')->nullable();   
            $table->string('occupation')->nullable(); 
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
        Schema::dropIfExists('back_ground_students');
    }
}
