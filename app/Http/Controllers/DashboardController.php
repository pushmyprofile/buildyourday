<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    public function __construct()
    {

    	//Checks user is authenticated before diisplaying user dashboard
		$this->middleware('auth');

    }

     public function home()
    {

    	//Function to display user dashboard
    	return view ('dashboard.dashboard');
    }

    

}
