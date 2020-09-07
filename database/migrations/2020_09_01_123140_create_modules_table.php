<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('course_group');
            $table->string('school');
            $table->string('subject_community');
            //$table->date('Date_of_Initial_Validation');
            //$table->date('Date_Last_Amended');
            $table->string('level_of_highest_award');
            $table->string('named_interim_awards');
            $table->string('mode_of_study');
            $table->string('qaa_subject_benchmark');
            $table->string('recognition_by_psrb');
            $table->string('other_external_reference');
            $table->string('learning_outcomes');
            $table->string('learning_teaching_method');
            $table->string('location_of_delivery');
            $table->string('admissions_requirements');
            $table->string('management_of_quality_standards');
            $table->string('support_for_students_for_learning');
            $table->string('current_course_map');
            $table->string('overall_assessment_approach');
            $table->string('student_experience_of_assessment');
            $table->string('slug')->index();
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
        Schema::dropIfExists('modules');
    }
}
