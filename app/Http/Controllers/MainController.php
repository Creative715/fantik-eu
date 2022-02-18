<?php

namespace App\Http\Controllers;

use App\Models\Tour;

class MainController extends Controller
{
    public function index()
    {
        $tours = Tour::allPaginate(12);
        return view('app.main', compact('tours'));
    }
}
