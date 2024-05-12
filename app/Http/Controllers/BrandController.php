<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $brand=Brand::all();
        return view('admin.brand.brandList',compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.brand.addBrand');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        $photo2 = $request->file('photo2');
        $name2 = $photo2->getClientOriginalName();
        Brand::create([
            'photo' => $name,
            'photo2' => $name2,
            
        ]);
        $photo->move('./pictures/', $name);
        $photo2->move('./pictures/', $name2);
        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();
        return redirect()->route('brand.index');
    }
}
