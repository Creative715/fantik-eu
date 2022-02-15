<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('main', compact('tours'));
    }
}
