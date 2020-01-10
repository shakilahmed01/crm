<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    //dashboard_index
    function index()
    {
    return view('Dashboard.homepage.index');

    }
    //end dashboard_index
}
