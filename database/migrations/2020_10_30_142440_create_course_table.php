<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->string('id', 500)->primary();
            $table->string('school_code', 3);
            $table->string('school_name', 100);
            $table->string('subject_code', 50);
            $table->string('subject_name', 100);
            $table->string('course_group_code', 50);
            $table->string('course_group_name', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
