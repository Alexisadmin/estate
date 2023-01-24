<?php

namespace App\Http\Controllers;
use App\Models\Plot;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationBarController extends Controller
{
    public function index()
    {
      return view('content.user-interface.navigationbar');
    }
    public function home()
    {
      return view('home.home');
    }
    public function plot()
    {

    $plots=Plot::get();

      return view('home.plot',compact('plots'));
    }
    public function house()
    {
      return view('home.house');
}
}
