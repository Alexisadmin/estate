<?php

namespace App\Http\Controllers;
use App\Models\Plot;
use App\Models\Car;
use App\Models\House;
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
      $houses=House::get();
      return view('home.house',compact('houses'));
    }
    public function car()
    {
      $cars=Car::get();
      return view('home.Car',compact('cars'));
    }

    public function about()
    {
      $cars=Car::get();
      return view('home.about',compact('cars'));
    }
}
