<?php

namespace App\Http\Controllers;

use App\Models\TourGroup;
use App\Http\Requests\StoreTourGroupRequest;
use App\Http\Requests\UpdateTourGroupRequest;

class TourGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTourGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTourGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TourGroup  $tourGroup
     * @return \Illuminate\Http\Response
     */
    public function show(TourGroup $tourGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TourGroup  $tourGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(TourGroup $tourGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTourGroupRequest  $request
     * @param  \App\Models\TourGroup  $tourGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTourGroupRequest $request, TourGroup $tourGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TourGroup  $tourGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(TourGroup $tourGroup)
    {
        //
    }
}
