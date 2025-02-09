<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Plan;
use App\Models\Section;

class HomeController extends Controller
{
    public function index()
    {

        return view('landingpage.landingPage' );
    }
}
