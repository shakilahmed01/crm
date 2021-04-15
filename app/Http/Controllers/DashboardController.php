<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\MyVehicle;
use App\addTOcart;
use Carbon\Carbon;

class DashboardController extends Controller
{

  // middleware

  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('verified');
    $this->middleware('role');
  }

  // dashboard_index
  function index()
  {
    return view('dashboard.homepage.index');
  }


  // add_product

  function add_vehicle ()
  {
    $categories = Category::all();
    $sub_categories = SubCategory::all();
    return view('Dashboard.vehicle.add_vehicle',compact('categories','sub_categories'));
  }

  // product_list
  function vehicle_list ()
  {
    $lists =MyVehicle::latest()->paginate(1);
    $vehicles = MyVehicle::all();
    // echo $vehicles;
    return view('dashboard.vehicle.vehicle_list',compact('vehicles','lists'));
  }
  function bookedlist()
  {


        //echo "string";
         $lists =addTOcart::latest()->paginate(1);
          $vehicles=addTOcart:: all();
          //echo $vehicles;

         return view('Dashboard.vehicle.bookedlist',compact('lists','vehicles'));

  }








    // END
}
