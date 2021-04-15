<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="{{asset('dashboard/assets/images/logo.svg')}}" width="25" alt="Aero"><span class="m-l-10">CRM</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a>
                    <div class="detail">
                        <h4>Shakil Ahmed</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li class="active open"><a href="http://127.0.0.1:8000/"><i class="zmdi zmdi-home"></i><span>Home</span></a></li>
            <li><a href="http://127.0.0.1:8000/user/profile"><i class="zmdi zmdi-account"></i><span>User Profile</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Vehicle</span></a>
                <ul class="ml-menu">
                    <li><a href="http://127.0.0.1:8000/v1/dashboard/add/vehicle">Add Vehicle</a></li>
                    <li><a href="http://127.0.0.1:8000/v1/dashboard/vehicle/list">List Vehicle</a></li>

                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Information</span></a>
                <ul class="ml-menu">

                    <li><a href="http://127.0.0.1:8000/user/information">User Form</a></li>
                    <li><a href="http://127.0.0.1:8000/user/information/list">User Information List</a></li>

                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>Vehicle Book List</span></a>
                <ul class="ml-menu">
                    <li><a href="{{route('v1vehicle_list')}}">All </a></li>
                    <li><a href="file-documents.html">Search Vehicle</a></li>
                    <li><a href="#">User Order List</a></li>
                    <li><a href="{{route('bookedlist')}}">ORDER LIST</a></li>
                </ul>
            </li>




            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span></a>
                <ul class="ml-menu">
                    <li><a href="echarts.html">E Chart</a></li>
                    <li><a href="c3.html">C3 Chart</a></li>
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="flot.html">Flot</a></li>
                    <li><a href="chartjs.html">ChartJS</a></li>
                    <li><a href="sparkline.html">Sparkline</a></li>
                    <li><a href="jquery-knob.html">Jquery Knob</a></li>
                </ul>
            </li>



            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span></a>
                <ul class="ml-menu">
                    <li><a href="https://www.google.com/maps/@23.8895458,90.3877717,13.83z">Google Map</a></li>
                    <li><a href="yandex.html">YandexMap</a></li>
                    <li><a href="jvectormap.html">jVectorMap</a></li>
                </ul>
            </li>
            <li>
                <div class="progress-container progress-primary m-t-10">
                    <span class="progress-badge">Traffic this Month</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                            <span class="progress-value">67%</span>
                        </div>
                    </div>
                </div>
                <div class="progress-container progress-info">
                    <span class="progress-badge">Server Load</span>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                            <span class="progress-value">86%</span>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
