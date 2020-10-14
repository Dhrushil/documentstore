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
            $table->string('course_group')->nullable();
            $table->string('school')->nullable();
            $table->string('subject_community')->nullable();
            $table->string('date_of_initial_validation')->nullable();
            $table->string('date_last_amended')->nullable();
            $table->string('level_of_highest_award')->nullable();
            $table->string('named_interim_awards')->nullable();
            $table->string('mode_of_study')->nullable();
            $table->string('qaa_subject_benchmark')->nullable();
            $table->string('recognition_by_psrb')->nullable();
            $table->string('other_external_reference')->nullable();
            $table->text('learning_outcomes')->nullable();
            $table->text('learning_teaching_method')->nullable();
            $table->string('location_of_delivery')->nullable();
            $table->text('admissions_requirements')->nullable();
            $table->text('management_of_quality_standards')->nullable();
            $table->text('support_for_students_for_learning')->nullable();
            $table->text('current_course_map')->nullable();
            $table->text('overall_assessment_approach')->nullable();
            $table->text('student_experience_of_assessment')->nullable();
            $table->text('created_by')->nullable();
            $table->text('created_by_email')->nullable();
            $table->text('created_by_id');
            $table->string('editedpost')->nullable();
            $table->string('editmadeby')->nullable();
            $table->string('editmadebyid')->nullable();
            $table->string('editmadebyemail')->nullable();
            $table->string('editedchanges')->nullable();
            $table->string('timeedited')->nullable();
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
