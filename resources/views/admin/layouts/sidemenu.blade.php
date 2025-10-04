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
                        
                        <li><a href="javascript:void(0);"><i class="ti ti-layout"></i><span>Manage Users</span></a>
                            <ul class="acc-menu">
                                <li><a href="{{url('admin/manage-users')}}">View Users</a></li>
                                <li><a href="{{url('admin/add-user')}}">Add User</a></li>
                                <li><a href="{{url('admin/manage-roles')}}">Roles</a></li>
                            </ul>
                        </li>
                      
                        
                        <li><a href="javascript:void(0);"><i class="ti ti-layout"></i><span>Settings</span></a>
                            <ul class="acc-menu">

                                <!-- <li><a href="{{url('admin/countries')}}">Manage CMS</a></li> -->
                                <li><a href="{{url('admin/countries')}}">Manage Country</a></li>
                                <li><a href="{{url('admin/states')}}">Manage State</a></li>
                                <li><a href="{{url('admin/cities')}}">Manage City</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>