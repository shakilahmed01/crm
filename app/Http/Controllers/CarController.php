<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use App\vehicle;
use App\MyVehicle;
use App\Mail\VehicleMail;
use Image;
use Mail;
use Carbon\Carbon;


class CarController extends Controller
{

    function create(Request $request)
    {
      $request->validate([

             'product_name'          =>'required',
             'product_price'         =>'required',
             'product_quantity'      =>'required',
             'product_category'      =>'required',
             'product_subcategory'   =>'required',
             'product_description'   =>'required',
             'brand'                 =>'required',
             'activation'            =>'required',
             'photo'                 =>'required',
             'child_photo_1'         =>'required',
             'child_photo_2'         =>'required',
             'child_photo_3'         =>'required',

           ]); //echo "string";
         //$last_inserted_id = product::insertGetId($request->except('_token'));

        $last_inserted_id = MyVehicle::insertGetId([

          'product_name'          =>$request->product_name,
          'product_price'         =>$request->product_price,
          'product_quantity'      =>$request->product_quantity,
          'product_category'      =>$request->product_category,
          'product_subcategory'   =>$request->product_subcategory,
          'product_description'   =>$request->product_description,
          'brand'                 =>$request->brand,
          'activation'            =>$request->activation,
          'photo'                 =>$request->photo,
          'child_photo_1'         =>$request->child_photo_1,
          'child_photo_2'         =>$request->child_photo_2,
          'child_photo_3'         =>$request->child_photo_3,
          'slug'                  =>Str::slug($request->product_name),
          'form_checked'          =>1,
          'created_at'            =>Carbon::now()

        ]);






        if ($request->hasFile('photo')) {
          	$photo_upload     =  $request ->photo;
          	$photo_extension  =  $photo_upload -> getClientOriginalExtension();
          	$photo_name       =  "CRM_feature_".$last_inserted_id . "." . $photo_extension;
          	Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/products/'.$photo_name),100);
          	MyVehicle::find($last_inserted_id)->update([
          	'photo'          => $photo_name,
                ]);
              }


              if ($request->hasFile('child_photo_1')) {
                  $photo_upload     =  $request ->child_photo_1;
                  $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                  $photo_name       =  "CRM_child_photo_1_".$last_inserted_id . "." . $photo_extension;
                  Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/products/'.$photo_name),100);
                  MyVehicle::find($last_inserted_id)->update([
                  'child_photo_1'          => $photo_name,
                      ]);
                    }


                    if ($request->hasFile('child_photo_2')) {
                        $photo_upload     =  $request ->child_photo_2;
                        $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                        $photo_name       =  "CRM_child_photo_2_".$last_inserted_id . "." . $photo_extension;
                        Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/products/'.$photo_name),100);
                        MyVehicle::find($last_inserted_id)->update([
                        'child_photo_2'          => $photo_name,
                            ]);
                          }


                                              if ($request->hasFile('child_photo_3')) {
                                                  $photo_upload     =  $request ->child_photo_3;
                                                  $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                                                  $photo_name       =  "CRM_child_photo_3_".$last_inserted_id . "." . $photo_extension;
                                                  Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/products/'.$photo_name),100);
                                                  MyVehicle::find($last_inserted_id)->update([
                                                  'child_photo_3'          => $photo_name,
                                                      ]);
                                                    }

        $product_name = $request->product_name;
        $product_price = $request->product_price;
        $product_quantity = $request->product_quantity;
        $product_description = $request->product_description;
       Mail::to('sa27289@gmail.com')->send(new VehicleMail($product_name,$product_price,$product_quantity,$product_description));

        return back();
    }

// product_trash
    function vehicle_trash($product_id)
    {
      MyVehicle::findOrFail($product_id)->delete();
      // product::where('id',$product_id)->delete();

      return back();
    }
    //activation
    function vehicleactivation($id , $activation)
    {
        // echo "product id : ".$id ." Activation : ".$activation;

         if ($activation == 'Active') {
             MyVehicle::findOrFail($id)->update([
                 'activation' => "Deactive",
             ]);
         } else {
                 MyVehicle::findOrFail($id)->update([
                 'activation' => "Active",
             ]);
         }
         return back();

    //     $allData = product::findOrFail(1);
    //    echo $allData;




        //$allLogo = MyVehicle::all();
        //foreach ($allLogo as $value) {
          //  $value->activation = 'Deactive';
              //  $value->save();

        //}
        //MyVehicle::findOrFail($id)->update([
            //'activation' => 'Active'
        //]);
      //  return back();

    }

    function single_vehicle_list($id)
    {
      $single_vehicles= MyVehicle:: findOrFail($id);
       return view ('dashboard.vehicle.single_vehicle_list',compact('single_vehicles'));
      //echo $single_vehicle;

      // code...

    }




    function vehicleupdate(Request $request)
    {
      MyVehicle::findOrFail($request->id)->update([

        'product_name'          =>$request->product_name,
        'product_price'         =>$request->product_price,
        'product_quantity'      =>$request->product_quantity,
        'product_category'      =>$request->product_category,
        'product_subcategory'   =>$request->product_subcategory,
        'product_description'   =>$request->product_description,
        'brand'                 =>$request->brand,
        'activation'            =>$request->activation,
        'photo'                 =>$request->photo,
        'child_photo_1'         =>$request->child_photo_1,
        'child_photo_2'         =>$request->child_photo_2,
        'child_photo_3'         =>$request->child_photo_3,
        'slug'                  =>Str::slug($request->product_name),
        'form_checked'          =>1,
        'created_at'            =>Carbon::now()

      ]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "CRM_feature_".$last_inserted_id . "." . $photo_extension;
          Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/products/'.$photo_name),100);
          MyVehicle::find($last_inserted_id)->update([
          'photo'          => $photo_name,
              ]);
            }


            if ($request->hasFile('child_photo_1')) {
                $photo_upload     =  $request ->child_photo_1;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "CRM_child_photo_1_".$last_inserted_id . "." . $photo_extension;
                Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/products/'.$photo_name),100);
                MyVehicle::find($last_inserted_id)->update([
                'child_photo_1'          => $photo_name,
                    ]);
                  }


                  if ($request->hasFile('child_photo_2')) {
                      $photo_upload     =  $request ->child_photo_2;
                      $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                      $photo_name       =  "CRM_child_photo_2_".$last_inserted_id . "." . $photo_extension;
                      Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/products/'.$photo_name),100);
                      MyVehicle::find($last_inserted_id)->update([
                      'child_photo_2'          => $photo_name,
                          ]);
                        }


                                            if ($request->hasFile('child_photo_3')) {
                                                $photo_upload     =  $request ->child_photo_3;
                                                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                                                $photo_name       =  "CRM_child_photo_3_".$last_inserted_id . "." . $photo_extension;
                                                Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/products/'.$photo_name),100);
                                                MyVehicle::find($last_inserted_id)->update([
                                                'child_photo_3'          => $photo_name,
                                                    ]);
                                                  }




      return back();
    }

    // END
}
