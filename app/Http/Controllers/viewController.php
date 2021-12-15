<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class viewController extends Controller
{
    public function Index(){
        return view('home');
    }
    public function Associationship(){
        return view('associationship');
    }
    public function Webinar(){
        return view('webinar');
    }
    public function Achievements(){
        return view('achievements');
    }
    public function Startupmart(){
        return view('startupmart');
    }
    public function Resources(){
        return view('resources');
    }
}
