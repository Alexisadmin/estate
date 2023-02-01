<?php

namespace App\Http\Controllers;
use App\Models\Plot;
use App\Models\Car;
use App\Models\House;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class NavigationBarController extends Controller
{
    public function index()
    {
      return view('content.user-interface.navigationbar');
    }
    public function home()
    {
      $homes=Post::get();
      return view('home.home',compact('homes'));
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
    public function contact()
    {
      $cars=Car::get();
      return view('home.contact',compact('cars'));
    }
    public function MorePlot($id)
    {
      $encId = Crypt::decrypt($id);
      $plot   = Plot::find($encId);
     
      return view('plots.show', compact('plot') );
    }
    public function MoreHouses($id)
    {
      $encId = Crypt::decrypt($id);
      $house   = House::find($encId);
     
      return view('houses.show', compact('house') );
    }
}
