<?php

namespace App\Http\Controllers;
use App\User;
class ProfileController extends Controller
{

    // Return the settings page
    public function settings() {
        return view('systemPages.settings');
    }

    // Return the admin page
    public function admin() {
        return view('systemPages.admin');
    }

    public function admindash() {
        return view('systemPages.admindashboard');
    }

    public function adminAlert() {
        return view('systemPages.adminalert');
    }
}
