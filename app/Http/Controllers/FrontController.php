<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Feature;
use App\Models\FeatureBlock;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function team(){
        $fblock=FeatureBlock::all();
        $feature=Feature::first();
        $service=Service::all();
        $brand=Brand::all();
        $slider=Slider::all();
        $blog=Blog::all();
        $team=Team::all();
        return view('welcome',compact('team','blog','slider','brand','service','feature','fblock'));
    }
    public function login(){
        return view('auth.login');
    }

    public function aboutPage(){
        $team=Team::all();
        return view('page.about',compact('team'));
    }

    public function blogdetails(){
        return view('blog.blogdetails');
    }
    
}
