<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicPDFController extends Controller
{
    //
    function index() 
    {
        $modules = $this->get_modules();
        return view('dynamic_pdf')->with('modules', $modules);
    }

    function get_modules_data() 
    {
        $modules = DB::table('modules')->limit(10)->get();
        return $modules;
    }
}
