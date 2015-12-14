<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //

    public function howitworks()
    {

    	return view ('pages.how-it-works');
    }

    public function pricing()
    {

    	return view ('pages.pricing');
    }

    public function aboutus()
    {

    	return view ('pages.about-us');
    }




}
