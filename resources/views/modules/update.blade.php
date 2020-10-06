@extends('layouts.app')

@section('content')

<update-form
    course="{!! ($module->course) !!}"
    course_group="{{$module->course_group}}"
    school="{{$module->school}}"
    subject_community="{{$module->subject_community}}"
    date_of_initial_validation="{{$module->date_of_initial_validation}}"
    date_last_amended="{{$module->date_last_amended}}"
    level_of_highest_award="{{$module->level_of_highest_award}}"
    named_interim_awards="{{$module->named_interim_awards}}"
    mode_of_study="{{$module->mode_of_study}}"
    qaa_subject_benchmark="{{$module->qaa_subject_benchmark}}"
    recognition_by_psrb="{{$module->recognition_by_psrb}}"
    other_external_reference="{{$module->other_external_reference}}"
    learning_outcomes="{{$module->learning_outcomes}}"
    learning_teaching_method="{{$module->learning_teaching_method}}"
    location_of_delivery="{{$module->location_of_delivery}}"
    admissions_requirements="{{$module->admissions_requirements}}"
    management_of_quality_standards="{{$module->management_of_quality_standards}}"
    support_for_students_for_learning="{{$module->support_for_students_for_learning}}"
    current_course_map="{{$module->current_course_map}}"
    overall_assessment_approach="{{$module->overall_assessment_approach}}"
    student_experience_of_assessment="{{$module->student_experience_of_assessment}}"
    id="{{$module->id}}"
/>



@endsection