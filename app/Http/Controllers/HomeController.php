<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

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
        $user=auth()->user();
        $projects = $user->projects;
        return view('home', compact('projects'));
    }

    public function dashboard()
    {
        $projects = Project::all();
        return view('dashboard', compact('projects'));
    }
}
