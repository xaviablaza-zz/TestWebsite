<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    public function home()
    {
        return view('home');
    }
    
    public function about()
    {
    	return view('about');
    }
    
    public function contact()
    {
    	return view('contact');
    }
    
    public function chapman_home()
    {
    	return view('chapman_home');
    }

}
