
@extends('dashboard.homepage.app')
<!-- Main Content -->

@section('content')

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>CRM Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Update Vehicle</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>


<div class="card">
    <div class="header">
        <h2><strong>Update</strong> Vehicle</h2>
        <ul class="header-dropdown">
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="javascript:void(0);">Action</a></li>
                    <li><a href="javascript:void(0);">Another action</a></li>
                    <li><a href="javascript:void(0);">Something else</a></li>
                </ul>
            </li>
            <li class="remove">
                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
            </li>
        </ul>
    </div>
    <div class="body">

    <form id="form_validation" method="POST" action="{{ route('vehicle_update') }}" enctype="multipart/form-data">
         @csrf
     <div class="form-group form-float">
                <input type="text" class="form-control" value="{{$single_vehicles->product_name}}" placeholder="Vehicle Name" name="product_name" required>
            </div>
            <div class="form-group form-float">
                <input type="text" class="form-control" placeholder="Vehicle Price" value="{{$single_vehicles->product_price}}" name="product_price" required>
            </div>
            <div class="form-group form-float">
                <input type="text" class="form-control" placeholder="Vehicle Quantity" value="{{$single_vehicles->product_quantity}}" name="product_quantity" required>
            </div>
            <div class="form-group form-float">
                <input type="text" class="form-control" placeholder="Description" value="{{$single_vehicles->product_description}}" name="product_description" required>
            </div>
            <div class="form-group form-float">
                <input type="text" class="form-control" placeholder="Brand" value="{{$single_vehicles->brand}}" name="brand" required>
            </div>
            <div class="form-group form-float">
                <input type="text" class="form-control" placeholder="Vehicle Activation" value="{{$single_vehicles->activation}}" name="activation" required>
            </div>










            <div class="form-group form-float">
              <div class="card">
                 <div class="header">
                     <h2>Feature Photo</h2>
                 </div>
                 <div class="body">
                     <input type="file" class="dropify" value="{{$single_vehicles->photo}}" name="photo">
                 </div>
             </div>
            </div>

            <div class="form-group form-float">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h2>Child Photo</h2>
                            </div>
                            <div class="body">
                                <input type="file" class="dropify"  name="child_photo_1" value="{{$single_vehicles->child_photo_1}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h2>Child Photo</h2>
                            </div>
                            <div class="body">
                                <input type="file" class="dropify"  name="child_photo_2" value="{{$single_vehicles->child_photo_2}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h2>Child Photo</h2>
                            </div>
                            <div class="body">
                                <input type="file" class="dropify"  name="child_photo_3" value="{{$single_vehicles->child_photo_3}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <input id="checkbox" type="checkbox" name="form_checked">
                    <label for="checkbox">I have read and accept the terms</label>
                </div>
            </div>
            <button class="btn btn-raised btn-primary waves-effect" type="submit">Update</button>
        </form>
    </div>
</div>
</div>
</div>

<!-- END -->

<!-- END::HERE WE PUT OUR CONTENT -->



</div>
</section>

@endsection
