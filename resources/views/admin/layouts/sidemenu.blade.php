<div class="static-sidebar-wrapper sidebar-default">
    <div class="static-sidebar">
        <div class="sidebar">
            <div class="widget">
                <div class="widget-body">
                    <div class="userinfo">
                        <div class="avatar">
                            <img src="{{asset('admin-assets/demo/avatar/avatar_15.png')}}" class="img-responsive img-circle"> 
                        </div>
                        <div class="info">
                            <span class="username">Jonathan Smith</span>
                            <span class="useremail">jon@avenxo.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget stay-on-collapse" id="widget-sidebar">
                <nav role="navigation" class="widget-body">
                    <ul class="acc-menu">
                        <li class="nav-separator"><span>Menu</span></li>
                        <li><a href="{{url('admin/dashboard')}}"><i class="ti ti-home"></i><span>Dashboard</span></a></li>
                        
                        <li><a href="javascript:void(0);"><i class="ti ti-user"></i><span>User Management</span></a>
                            <ul class="acc-menu">
                                
                                <li><a href="{{ route('users.index') }}">Manage Users</a></li>
                                <!-- <li><a href="{{url('users/add')}}">Add New User</a></li> -->
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);"><i class="ti ti-user"></i><span>Provider Management</span></a>
                            <ul class="acc-menu">
                                <li><a href="{{url('providers/list')}}">All Providers</a></li>
                                <li><a href="{{url('providers/add')}}">Add New Provider</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);"><i class="ti ti-user"></i><span>Service Management</span></a>
                            <ul class="acc-menu">
                                <li><a href="{{url('services/list')}}">All Services</a></li>
                                <li><a href="{{ route('category.list') }}">All Categories</a></li>
                            </ul>
                        </li>
                       

                        <li><a href="javascript:void(0);"><i class="ti ti-layout"></i><span>Plans</span></a>
                            <ul class="acc-menu">
                                <li><a href="{{url('plan/list')}}">View</a></li>
                                <li><a href="{{url('plan/add')}}">Add New</a></li>
                            </ul>
                        </li>
                      
                        
                        <li><a href="javascript:void(0);"><i class="ti ti-layout"></i><span>CMS</span></a>
                            <ul class="acc-menu">
                                <li><a href="{{url('cms/view')}}">View</a></li>
                                <li><a href="{{url('cms/add')}}">Add New</a></li>
                            </ul>
                        </li>


                        <li><a href="javascript:void(0);"><i class="ti ti-layout"></i><span>Setup</span></a>
                            <ul class="acc-menu">
                                <li><a href="{{ route('role.index') }}">Manage Role</a></li>
                                <li><a href="{{url('/email-template/list')}}" >Email Tempates</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="javascript:void(0);"><i class="ti ti-layout"></i><span>Location Management</span></a>
                            <ul class="acc-menu">
                                <li><a href="{{url('/address/countries')}}">Manage Country</a></li>
                                <li><a href="{{url('/address/states')}}">Manage State</a></li>
                                <li><a href="{{url('/address/cities')}}">Manage City</a></li>
                            </ul>
                        </li>



                        

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>