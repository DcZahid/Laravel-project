<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Team::all();
        return view('admin.team.teamList',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.team.addTeam');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $photo = $request->file('photo');
        $name = $photo->getClientOriginalName();
        Team::create([
            'photo' => $name,
            'name' => $request->name,
            'company' => $request->company,
        ]);
        $photo->move('./pictures/', $name);
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $team = Team::findOrFail($id);
        return view('admin.team.teamEdit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $team = Team::findOrFail($id);
        $team->update($request->all());
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
        $team->delete();
        return redirect()->route('team.index');
    }
}
