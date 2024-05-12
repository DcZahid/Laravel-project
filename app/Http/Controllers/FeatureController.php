<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $feature=Feature::all();
        return view('admin.feature.featureList',compact('feature'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.feature.addFeature');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Feature::create([
            'title' => $request->title,
            'title1' => $request->title1,
            'details' => $request->details,
            'btn' => $request->btn,
            'span' =>$request->span,
            'span1' =>$request->span1,
            'span2' =>$request->span2,
            'span3' =>$request->span3,
        ]);
       
        return redirect()->route('feature.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $feature=Feature::findOrFail($id);
        return view('admin.feature.featureEdit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $feature = Feature::findOrFail($id);
        $feature->update($request->all());
        return redirect()->route('feature.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        //
        $feature->delete();
        return redirect()->route('feature.index');
    }
}
