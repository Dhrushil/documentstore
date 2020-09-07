<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersInputFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_input_form', function (Blueprint $table) {
            $table->id();
            $table->string('Course');
            $table->string('Course_Group');
            $table->string('School');
            $table->string('Subject_Community');
            $table->date('Date_of_Initial_Validation');
            $table->date('Date_Last_Amended');
            $table->string('Level_of_highest_award');
            $table->string('Named_interim_awards');
            $table->string('Mode(s)_of_Study');
            $table->string('QAA_subject_benchmark');
            $table->string('Recognition_by_PSRB');
            $table->string('Other_External_Reference');
            $table->string('Learning_Outcomes');
            $table->string('Learning_&_Teaching_Method');
            $table->string('Location(s)_of_Delivery');
            $table->string('Admissions_requirements');
            $table->string('Management_of_Quality_&_Standards');
            $table->string('Support_for_Students_for_Learning');
            $table->string('Current_Course_Map');
            $table->string('Overall_Assessment_Approach');
            $table->string('Student_Experience_of_Assessment');
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
        Schema::dropIfExists('users_input_form');
    }
}
