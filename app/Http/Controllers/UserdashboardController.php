<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\addTOcart;
use Mail;
use App\Mail\VehicleMail;
use App\MyVehicle;

class UserdashboardController extends Controller
{

  // middleware

  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('verified');

  }

  // dashboard_index
  function userindex()
  {
    return view('dashboard.homepage.index');
  }


  // add_product



  // product_list
  function uservehicle_list ()
  {
    $lists =MyVehicle::latest()->paginate(1);
    $vehicles = MyVehicle::all();
    // echo $vehicles;
    return view('dashboard.vehicle.uservehicle_list',compact('vehicles','lists'));
  }
  function singleBook($id)
  {
    $vehicles = MyVehicle::findOrFail($id);
    //echo $data->product_name;
    return view('dashboard.vehicle.single_book',compact('vehicles'));

  }
  function addToCart(Request $request)
  {
    $from =  new Carbon($request->from);
    $to = new Carbon($request->to);
    $days = $from->diffInDays($to);
    $request->validate([

           'usernumber'          =>'required',
           'from'                =>'required',
           'to'                  =>'required',


         ]);
   addTOcart::insert([

      'product_name'        =>$request->product_name,

      'usernumber'          =>$request->usernumber,
      'quantity'            =>$request->quantity,
      'price'               =>$request->price,
      'from'                =>$request->from,
      'to'                  =>$request->to,
      'booked_price'        =>$request->price*$days,
      'created_at'          =>Carbon::now(),
        ]);

        $product_name = $request->product_name;
        $price = $request->price;
        $from = $request->from;
        $to = $request->to;
       Mail::to('sa27289@gmail.com')->send(new VehicleMail($product_name,$price,$from,$to));

        return back();

    //echo $request->product_name.'<br>';
    //echo $request->quantity." cars ".$request->price.'<br>';
    //echo $days." days price is ".$request->price*$days.'<br>';
  }


function paymentform()
{
 //echo "sting";
 //$single_vehicles= addTOcart:: findOrFail();
 //echo $single_vehicles;
  //return view ('dashboard.vehicle.single_vehicle_list',compact('single_vehicles'));
 return view('Dashboard.vehicle.payment');

}
function single_payment($id)
{
 //echo "sting";
 $single_vehicles= addTOcart:: findOrFail($id);
 //echo $single_vehicles;
  return view ('dashboard.vehicle.payment',compact('single_vehicles'));
 //return view('Dashboard.vehicle.payment');

}

function singleBooked()
{


      //echo "string";

        $vehicles=addTOcart:: all();
        //echo $vehicles;

       return view('Dashboard.vehicle.bookedlist',compact('lists','vehicles'));

}



    // END
}
