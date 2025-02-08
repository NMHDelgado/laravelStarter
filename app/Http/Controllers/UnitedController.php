<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitedController extends Controller
{
    public function index(){
        return view('Uniteds.united');
    }
}
