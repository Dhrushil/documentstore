<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function axiosData() {
        $modules = Module::all(); 
        return response()->json(["modules"=> $modules]);
    }
    public function index()
    {
        //
        
        return view('modules.index');
       
    }
    public function styletest() {
        return view('modules');
    }
    public function show(Module $id)
    {
        //
        return view ('modules.show', ['module' =>$id]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $module = new Module;
        $module->course = request('course');
        $module->course_group = request('course_group');
        $module->school = request('school');
        $module->subject_community = request('subject_community');
        //$module->Date_of_Initial_Validation = request('Date_of_Initial_Validation');
        //$module->Date_Last_Amended = request('Date_Last_Amended');
        $module->level_of_highest_award = request('level_of_highest_award');
        $module->named_interim_awards = request('named_interim_awards');
        $module->mode_of_study = request('mode_of_study');
        $module->qaa_subject_benchmark = request('qaa_subject_benchmark');
        $module->recognition_by_psrb = request('recognition_by_psrb');
        $module->other_external_reference = request('other_external_reference');
        $module->learning_outcomes = request('learning_outcomes');
        $module->learning_teaching_method = request('learning_teaching_method');
        $module->location_of_delivery = request('location_of_delivery');
        $module->admissions_requirements = request('admissions_requirements');
        $module->management_of_quality_standards = request('management_of_quality_standards');
        $module->support_for_students_for_learning = request('support_for_students_for_learning');
        $module->current_course_map = request('current_course_map');
        $module->overall_assessment_approach = request('overall_assessment_approach');
        $module->student_experience_of_assessment = request('student_experience_of_assessment');
        $module->slug = str_slug($module->title, '-') . '-' . $module->id;
        $module->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
