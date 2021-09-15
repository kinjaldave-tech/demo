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
}
