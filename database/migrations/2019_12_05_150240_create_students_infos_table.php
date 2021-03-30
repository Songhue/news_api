<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_infos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('user_id');
            $table->integer('parent_id');
            $table->integer('back_ground_student_id');  
            $table->integer('promotion_id'); 
            $table->string('photo')->nullable();        
            $table->string('khname')->nullable();
            $table->string('enname')->nullable();
            $table->string('sex')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('dob');
            $table->string('dop')->nullable();
            $table->string('nationality')->nullable();
            $table->string('currentaddress')->nullable();
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
        Schema::dropIfExists('students_infos');
    }
}
