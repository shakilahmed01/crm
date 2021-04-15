@extends('dashboard.homepage.app')
<!-- Main Content -->

@section('content')


<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <h2>CRM Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item">Vehicle Book</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
      </div>



<!-- BEGIN::HERE WE PUT OUR CONTENT -->

<!-- START -->
<!-- @yield('content') -->

<!-- <div class="container"> -->
  <div class="row">
    <div class="container">

    <!-- <div class="col-sm-8 col-md-8 col-lg-8"> -->
        <div class="card">
            <div class="header">
                <h2><strong>Book</strong> Vehicle</h2>
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
            <div class="table-responsive social_media_table">
                <table class="table table-hover c_table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Brand</th>
                            <th>Activation</th>
                            <!-- <th>Created At</th> -->


                        </tr>
                    </thead>
                    <tbody>




                        <tr>
                            <td>
                              <img src="{{ asset('uploads/products') }}/{{ $vehicles->photo }}" alt="">

                            </td>
                            <td><span class="list-name">{{ $vehicles->product_name }}</span>
                                <!-- <span class="text-muted">Florida, United States</span> -->
                            </td>

                            <td>
                                <span class="badge badge-success">{{ $vehicles->product_price }}</span>
                            </td>

                            <td>
                                <span class="badge badge-success">{{ $vehicles->product_quantity }}</span>
                            </td>

                            <td>
                                <span>{{ Str::limit($vehicles->product_description,10) }}</span>
                            </td>

                            <td>
                                <span>{{ $vehicles->relationBetweenCategory->category_name}}</span>
                            </td>

                            <td>
                                <span>{{ $vehicles->relationBetweenSubCategory->subcategory_name }}</span>
                            </td>

                            <td>
                                <span class="badge badge-info">{{ $vehicles->brand }}</span>
                            </td>

                            <td>
                                @if ($vehicles->activation == 'Active')
                                    <a href="#" class="btn btn-success">Active</a>
                                @else
                                    <a href="#" class="btn btn-danger">Dective</a>
                                @endif
                            </td>

                            <!-- <td>
                                <span class="badge badge-success">{{ $vehicles->created_at }}</span>
                            </td> -->


                          </tr>

                          <div class="container">
                            <div class="row">
                              <div class="col-md-4 offset-md-4">
                          <form action="{{route('addToCart')}}" method="post">
                            @csrf
  <div class="form-group">
    <lebel for="Product_name">Name</lebel>
    <input type="text" class="form-control" readonly name="product_name" value="{{ $vehicles->product_name}}">

  </div>
  <div class="form-group">
    <lebel for="usernumber">User Contact</lebel>
    <input type="numeric" class="form-control"  name="usernumber" value="{{ $vehicles->usernumber}}">

  </div>
  <div class="form-group">
    <lebel for="quantity">Quantity</lebel>
    <input type="text" class="form-control" readonly name="quantity" value="{{$vehicles->product_quantity}}">
  </div>
  <div class="form-group">
    <lebel for="price">Price</lebel>
    <input type="text" class="form-control" readonly name="price" value="{{$vehicles->product_price}}">
  </div>
  <div class="form-group">
    <lebel for="quantity">from</lebel>
    <input type="date" class="form-control" name="from" value="{{$vehicles->product_quantity}}">
  </div>
  <div class="form-group">
    <lebel for="quantity">to</lebel>
    <input type="date" class="form-control" name="to" value="{{$vehicles->product_quantity}}">
  </div>
  <button type="submit" class="btn btn-danger">Book</button>
  

</form>






                    </tbody>
                </table>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            </div>
        </div>
    <!-- </div> -->

  </div>


<!-- </div> -->
</section>
<!-- END -->

<!-- END::HERE WE PUT OUR CONTENT -->



    </div>
</section>

@endsection

@section('custom_js')



@endsection
