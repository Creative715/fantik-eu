<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourGroup;

class TourController extends Controller
{

    public function index()
    {
        $tours = Tour::allPaginate(24);
        return view('app.tour.index', compact('tours'));
    }


    public function show($slug)
    {
        $tour = Tour::findBySlug($slug);
        return view('app.tour.tour', compact('tour'));
    }

    public function allByGroup(TourGroup $group) {
        $tours = $group->tours()->findByGroup();
        return view('app.tour.group', compact('tours'));
    }


}
