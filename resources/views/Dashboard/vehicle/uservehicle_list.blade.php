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
                        <li class="breadcrumb-item">Vehicle List</li>
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
                <h2><strong>List</strong> Vehicle</h2>
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
                            <th>Vehicle Name</th>
                            <th>Price</th>
                            <th>Qunatity</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Subcategory</th>
                            <th>Brand</th>
                            <th>Activation</th>
                            <!-- <th>Created At</th> -->
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                      @foreach($lists as $list)


                        <tr>
                            <td>
                              <img src="{{ asset('uploads/products') }}/{{ $list->photo }}" alt="">

                            </td>
                            <td><span class="list-name">{{ $list->product_name }}</span>
                                <!-- <span class="text-muted">Florida, United States</span> -->
                            </td>

                            <td>
                                <span class="badge badge-success">{{ $list->product_price }}</span>
                            </td>

                            <td>
                                <span class="badge badge-success">{{ $list->product_quantity }}</span>
                            </td>

                            <td>
                                <span>{{ Str::limit($list->product_description,10) }}</span>
                            </td>

                            <td>
                                <span>{{ $list->relationBetweenCategory->category_name}}</span>
                            </td>

                            <td>
                                <span>{{ $list->relationBetweenSubCategory->subcategory_name }}</span>
                            </td>

                            <td>
                                <span class="badge badge-info">{{ $list->brand }}</span>
                            </td>

                            <td>
                                @if ($list->activation == 'Active')
                                    <a href="#" class="btn btn-success">Active</a>
                                @else
                                    <a href="#" class="btn btn-danger">Dective</a>
                                @endif
                            </td>

                            <!-- <td>
                                <span class="badge badge-success">{{ $list->created_at }}</span>
                            </td> -->

                            <td>

                                <a href="{{ url('/v2/dashboard/book/vehicle') }}/{{ $list->id }}/{{ $list->slug }}" class=" btn-sm btn-danger">Book Now</a>
                            </td>
                          </tr>

                      @endforeach



                    </tbody>
                </table>
                {{ $lists->links() }}
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
