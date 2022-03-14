    <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="#"><i class="icon-user"></i>My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        <i class="fa fa-power"></i></a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
                <hr>
            </div>
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">                            
                            <li class="active">
                                <a href="#Dashboard" class="has-arrow"><i class="fal fa-home"></i> <span>Overview</span></a>
                                <ul>
                                    <li><a href="index.html">Analytical</a></li>                                    
                                    <li><a href="index2.html">Demographic</a></li>
                                    <li><a href="index3.html">Hospital</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#services" class="has-arrow"><i class="far fa-toolbox"></i> <span>Service Management</span></a>
                                <ul>
                                                                       
                                    <li><a href="{{route('services.create')}}">Add Services</a></li>
                                    <li><a href="{{route('services.index')}}">All Services</a></li> 
                                </ul>
                            </li> 
                            <li>
                                <a href="#users" class="has-arrow"><i class="fal fa-user-plus"></i> <span>Users</span></a>
                                <ul>
                                    <li><a href="{{route('users.create')}}">Create <span class="badge badge-primary float-right">Employee</span></a></li>
                                    <li><a href="{{route('users.index')}}">View users</a> </li>
                                    <li><a href="#">View <span class="badge badge-warning float-right">Customers</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Authentication" class="has-arrow"><i class="fal fa-lock"></i> <span>Authentication</span></a>
                                <ul>                                    
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#dosiyes" class="has-arrow"><i class="fal fa-file"></i> <span>Documents</span></a>
                                <ul>
                                    <li><a href="{{route('dosiyes.create')}}">Attach <span class="badge badge-danger float-right">Documents</span></a></li>
                                    <li><a href="{{route('dosiyes.index')}}">Documents <span class="badge badge-success float-right">Overview</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#settings" class="has-arrow"><i class="fa fa-set"></i> <span>Anomaly report</span></a>
                                <ul>
                                    <li><a href="{{route('failedAutho')}}">Auth <span class="badge badge-primary float-left">Failed</span></a></li>
                                    <li><a href="{{route('failedDataEntry')}}">Data Entry <span class="badge badge-danger float-left">Failed</span></a></li>
                                    <li><a href="{{route('failedServiceRequest')}}">User request <span class="badge badge-success float-left">Failed</span></a></li>
                                </ul> 
                            </li>
                            <li>
                                <a href="#charts" class="has-arrow"><i class="fa fa-chart-bar"></i> <span>Charts</span></a>
                                <ul>
                                    <li><a href="page-profile2.html">Profile <span class="badge badge-warning float-right">v2</span></a></li>
                                    <li><a href="page-gallery.html">Image Gallery <span class="badge badge-default float-right">v1</span></a> </li>
                                    <li><a href="chart-morris.html">Analtical</a> </li>
                                    <li><a href="chart-flot.html">Flot</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>  
            </div>          
        </div>
    </div>
