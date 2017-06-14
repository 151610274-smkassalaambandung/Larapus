<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akuController extends Controller
{
	public function __construct()
	{
		 $this->middleware('auth');
	} 
    
    public function alif()
    {
    	return view ('Halo');
    }
}
