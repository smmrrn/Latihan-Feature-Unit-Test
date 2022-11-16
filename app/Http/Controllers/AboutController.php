<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
            $data = 'About Page';
            return view('about', compact('data'));
    }
}
