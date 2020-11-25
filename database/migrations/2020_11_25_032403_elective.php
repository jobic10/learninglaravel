<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Elective extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id')->unsigned();
            $table->char('name', 30);
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electives');
    }
}