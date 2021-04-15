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
                        <li class="breadcrumb-item">Payment Vehicle</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>


<!-- BEGIN::HERE WE PUT OUR CONTENT -->

<!-- START -->
<!-- @yield('content') -->

<!-- Basic Validation -->





                   <div class="card">
                       <div class="header">
                           <h2><strong>payment</strong> Vehicle</h2>
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

                       <form id="form_validation" method="POST" action="stripepayment" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <lebel for="Product_name">Name</lebel>
                              <input type="text" class="form-control" readonly name="product_name" value="{{ $single_vehicles->product_name}}">

                            </div>
                            <div class="form-group">
                              <lebel for="usernumber">User Contact</lebel>
                              <input type="numeric" class="form-control" readonly name="usernumber" value="{{ $single_vehicles->usernumber}}">

                            </div>
                            <div class="form-group">
                              <lebel for="quantity">Quantity</lebel>
                              <input type="text" class="form-control" readonly name="quantity" value="{{ $single_vehicles->quantity}}">
                            </div>
                            <div class="form-group">
                              <lebel for="from">From</lebel>
                              <input type="text" class="form-control" readonly name="from" value="{{$single_vehicles->from}}">
                            </div>
                            <div class="form-group">
                              <lebel for="quantity">To</lebel>
                              <input type="date" class="form-control" readonly name="to" value="{{$single_vehicles->to}}">
                            </div>
                            <div class="form-group">
                              <lebel for="booked_price">Booked Price</lebel>
                              <input type="numeric" class="form-control" readonly name="booked_price" value="{{$single_vehicles->booked_price}}">
                            </div>




                               <button class="btn btn-raised btn-primary waves-effect" type="submit">pay now</button>
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

@section('custom_js')



@endsection
