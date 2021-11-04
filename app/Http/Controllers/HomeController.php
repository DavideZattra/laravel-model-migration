<?php

namespace App\Http\Controllers;

use App\Models\Travel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $travels = Travel::all();

        return view('home', compact('travels'));

    }
}
