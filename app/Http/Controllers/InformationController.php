<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

use Carbon\Carbon;


class InformationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role');
  }
  function userprofile()
  {
    return view ('information.userprofile');
  }
    function index()
  {
    //echo "string";


    return view('information.index');
  }
  function create(Request $request)
{

     $request->validate([
            'name'        =>'required',
            'email'       =>'required|email',
            'companyname' =>'required',
            'address'      =>'required',
          ]); //echo "string";
  Information::insert([

    'name'         =>$request->name,
    'email'        =>$request->email,
    'companyname'  =>$request->companyname,
    'address'       =>$request->address,
    'created_at'   =>Carbon::now(),

  ]);
  return back();
}
function information_list()
{
//echo "string";
$lists =information::latest()->paginate(2);
$informations = information:: all();



     return view('information.information_list',compact('lists','informations'));
  }
  function single_list($information_id)
  {
    $single_information= information:: findOrFail($information_id);
     return view ('information.single_list',compact('single_information'));
    //echo $single_information;
  }
  function update(Request $request)
  {
    information::findOrFail($request->information_id)->update([

      'name'         =>$request->name,
      'email'        =>$request->email,
      'companyname'  =>$request->companyname,
      'address'       =>$request->address,
    ]);
    return back();
  }

  function delete ($information_id)
  {
     //echo "$information_id";
    information:: findOrFail($information_id)->delete([
      'deleted_at'   =>Carbon::now(),
    ]);
    return back();
  }

}
