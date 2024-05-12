<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $service=Service::all();
        return view('admin.service.serviceList',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.service.addService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        $photo1 = $request->file('photo1');
        $name1 = $photo1->getClientOriginalName();
        Service::create([
            'photo' => $name,
            'photo1' => $name1,
            'title' => $request->title,
            'details' => $request->details,
            'btn' => $request->btn,
            'class' => $request->class,
        ]);
        $photo->move('./pictures/', $name);
        $photo1->move('./pictures/', $name1);
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $service=Service::findOrFail($id);
        return view('admin.service.serviceEdit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $service = Service::findOrFail($id);
        $service->update($request->all());
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        return redirect()->route('service.index');
    }
}
