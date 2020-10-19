<?php

namespace App\Http\Controllers;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
     
    }
    public function usersGet()
    {
        $user = User::all();
        return response()->json(["user"=> $user]);
    }
    public function users(User $id)
    {
        
        return view('systemPages.profile', ['user' => $id]);
    }
}
