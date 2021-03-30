<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fathername')->nullable(); 
            $table->string('fatherphone')->nullable(); 
            $table->string('fathernationality')->nullable(); 
            $table->string('fatheroccupation')->nullable(); 
            $table->string('fathercurrentaddress')->nullable(); 
            $table->string('mothername')->nullable();   
            $table->string('motherphone')->nullable(); 
            $table->string('mothernationality')->nullable(); 
            $table->string('motheroccupation')->nullable(); 
            $table->string('mothercurrentaddress')->nullable();     
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('parents');
    }
}
