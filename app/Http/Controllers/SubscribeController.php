<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $email=Subscribe::all();
        return view('admin.subscribe.subscribeList',compact('email'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('include.subscribe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //
        Subscribe::create([
            // dd($request),
            'email'=>$request->email,
            
        ]);
        
        Mail::to($request->email)->send(new SendMail);
        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }
}
