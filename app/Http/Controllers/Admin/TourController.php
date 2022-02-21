<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Tour;
use App\Models\TourGroup;
use Illuminate\Http\Request;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tour.index', [ 'tours' => Tour::select()->orderBy('created_at', 'desc')->paginate('10')]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tour.create',
            [
                'tour'    => [],
                'tour_groups' => TourGroup::all(),
                'delimiter'  => ''
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour = Tour::create($request->all());

        if($request->input('tour_groups')) :
            $tour->tour_groups()->attach($request->input('tour_groups'));
        endif;
        // Images
        if ($request->file('img')) {
            $path = Storage::putFile('public', $request->file('img'));
            $url = Storage::url($path);
            $tour->img = $url;
        }
        $tour->save();

//        if($request->hasFile("images")){
//            $files=$request->file("images");
//            foreach($files as $file){
//                $imageName=time().'_'.$file->getClientOriginalName();
//                $request['tour_id']=$tour->id;
//                $request['image']=$imageName;
//                $file->move(\public_path("/images/gallery"),$imageName);
//                Image::create($request->all());
//
//            }
//        }

        return redirect()->route('admin.tour.index', $tour)->with('success', 'Created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
