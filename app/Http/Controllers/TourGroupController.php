<?php

namespace App\Http\Controllers;

use App\Models\TourGroup;

class TourGroupController extends Controller
{

    public function index()
    {
        $tour_groups = TourGroup::all();
        return view('app.includes.groups', compact('tour_groups'));
    }
}
