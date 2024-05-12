<?php

namespace App\Http\Controllers;

use App\Models\FeatureBlock;
use Illuminate\Http\Request;

class FeatureBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fblock=FeatureBlock::all();
        return view('admin.featureBlock.blockList',compact('fblock'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.featureBlock.addBlock');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        FeatureBlock::create([
            'title' => $request->title,
            'details' => $request->details,
            'icon' => $request->icon,
        ]);
       
        return redirect()->route('fblock.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FeatureBlock $featureBlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $fblock=FeatureBlock::findOrFail($id);
        return view('admin.featureBlock.blockEdit',compact('fblock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $fblock = FeatureBlock::findOrFail($id);
        $fblock->update($request->all());
        return redirect()->route('fblock.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeatureBlock $featureBlock)
    {
        //
        $featureBlock->delete();
        return redirect()->route('fblock.index');
    }
}
