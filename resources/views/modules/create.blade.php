@extends('layouts.app')

@section('content')

<v-container>
    <h1>Definitive Documentation Store - Input Form</h1>
    <form method="post" action="/modules" enctype="multipart/form-data">
        {{ csrf_field() }}
        <v-text-field outlined name="course" id="course" label="Course">{{old ('Course')}}</v-text-field>
        <v-text-field outlined name="course_group" id="course_group" label="Course_Group">{{old ('Course_Group')}}</v-text-field>
        <v-text-field outlined name="school" id="school" label="school">{{old ('School')}}</v-text-field>
        <v-text-field outlined name="subject_community" id="subject_community" label="Subject_Community">{{old ('Subject_Community')}}</v-text-field>
        <v-text-field outlined name="Date_of_Initial_Validation" id="Date_of_Initial_Validation" label="Date_of_Initial_Validation">{{old ('Date_of_Initial_Validation')}}</v-text-field>
        <v-text-field outlined name="Date_Last_Amended" id="Date_Last_Amended" label="Date_Last_Amended">{{old ('Date_Last_Amended')}}</v-text-field>
        <v-text-field outlined name="level_of_highest_award" id="level_of_highest_award" label="Level_of_highest_award">{{old ('Level_of_highest_award')}}</v-text-field>
        <v-text-field outlined name="named_interim_awards" id="named_interim_awards" label="Named_interim_awards">{{old ('Named_interim_awards')}}</v-text-field>
        <v-text-field outlined name="mode_of_study" id="mode_of_study" label="Mode(s)_of_Study">{{old ('Mode_of_Study')}}</v-text-field>
        <v-text-field outlined name="qaa_subject_benchmark" id="qaa_subject_benchmark" label="QAA_subject_benchmark">{{old ('QAA_subject_benchmark')}}</v-text-field>
        <v-text-field outlined name="recognition_by_psrb" id="recognition_by_psrb" label="Recognition_by_PSRB">{{old ('Recognition_by_PSRB')}}</v-text-field>
        <v-text-field outlined name="other_external_reference" id="other_external_reference" label="Other_External_Reference">{{old ('Other_External_Reference')}}</v-text-field>
        <v-text-field outlined name="learning_outcomes" id="learning_outcomes" label="Learning_Outcomes">{{old ('Learning_Outcomes')}}</v-text-field>
        <v-text-field outlined name="learning_teaching_method" id="learning_teaching_method" label="Learning_&_Teaching_Method">{{old ('Learning_Teaching_Method')}}</v-text-field>
        <v-text-field outlined name="location_of_delivery" id="location_of_delivery" label="Location(s)_of_Delivery">{{old ('Location_of_Delivery')}}</v-text-field>
        <v-text-field outlined name="admissions_requirements" id="admissions_requirements" label="Admissions_requirements">{{old ('Admissions_requirements')}}</v-text-field>
        <v-text-field outlined name="management_of_quality_standards" id="management_of_quality_standards" label="Management_of_Quality_&_Standards">{{old ('Management_of_Quality_Standards')}}</v-text-field>
        <v-text-field outlined name="support_for_students_for_learning" id="support_for_students_for_learning" label="Support_for_Students_for_Learning">{{old ('Support_for_Students_for_Learning')}}</v-text-field>
        <v-text-field outlined name="current_course_map" id="current_course_map" label="Current_Course_Map">{{old ('Current_Course_Map')}}</v-text-field>
        <v-text-field outlined name="overall_assessment_approach" id="overall_assessment_approach" label="Overall_Assessment_Approach">{{old ('Overall_Assessment_Approach')}}</v-text-field>
        <v-text-field outlined name="student_experience_of_assessment" id="student_experience_of_assessment" label="Student_Experience_of_Assessment">{{old ('Student_Experience_of_Assessment')}}</v-text-field>
        <button type="submit">Submit</button> 
    </form>
</v-container>

@endsection