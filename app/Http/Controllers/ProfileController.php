<?php

namespace App\Http\Controllers;
use App\User;
class ProfileController extends Controller
{
    public function settings() {
        return view('navbar.settings');
    }
}
