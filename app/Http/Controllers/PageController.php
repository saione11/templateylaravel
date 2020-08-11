<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homerun($value='')
    {
    	return view('homepage');
    }
     public function aboutrun($value='')
    {
    	return view('aboutpage');
    }
     public function contactrun($value='')
    {
    	return view('contactpage');
    }
    public function simplerun($value='')
    {
        return view('simplatepage');
    }
}
