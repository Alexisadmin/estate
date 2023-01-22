<?php

namespace App\Http\Controllers\user_interface;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Navbar extends Controller
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
    return view('home.plot');
  }
  public function house()
  {
    return view('home.house');
  }
}
