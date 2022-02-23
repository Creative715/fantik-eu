<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TourResource;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function show(Request $request)
    {
        $slug = $request->get('slug');
        $tour = Tour::findBySlug($slug);
        return new TourResource($tour);
    }
}
