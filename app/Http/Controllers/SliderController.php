<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $slider=Slider::all();
        return view('admin.slider.sliderList',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.slider.addSlider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Slider::create([
            'photo' => $name,
            'title' => $request->title,
            'details' => $request->details,
            'btn' => $request->btn,
            'btn2' => $request->btn2,
        ]);
        $photo->move('./pictures/', $name);
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $slider=Slider::findOrFail($id);
        return view('admin.slider.sliderEdit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $team = Slider::findOrFail($id);
        $team->update($request->all());
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
        $slider->delete();
        return redirect()->route('slider.index');
    }
}
