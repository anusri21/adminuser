<ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index-2.html">Admin</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <!-- <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{asset('public/admin/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{asset('public/admin/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li> -->
                    <li class="xn-title"></li>
                    <li class="active">
                        <a href="{{url('admin/dashboard')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">User Roles</span></a>
                        <ul>
                            <li><a href="{{url('admin/addrole')}}"><span class="fa fa-user"></span> Add Roles</a></li>
                            <li><a href="{{url('admin/rolelist')}}"><span class="fa fa-users"></span> Role List</a></li>
                                                  
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Users</span></a>
                        <ul>
                           <li><a href="{{url('admin/adduser')}}"><span class="fa fa-user"></span> Add User</a></li>
                            <li><a href="{{url('admin/userlist')}}"><span class="fa fa-user"></span> User List</a></li>
                            
                                                  
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">User Permission</span></a>
                        <ul>
                            <li><a href="{{url('admin/addpermission')}}"><span class="fa fa-user"></span>Add User Permission</a></li>
                            <li><a href="{{url('admin/permissionlist')}}"><span class="fa fa-user"></span>User Permission List</a></li>
                            
                        </ul>
                    </li>
                    <!-- <li class="xn-title">Components</li> -->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Products</span></a>                        
                        <ul>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-sign-in"></span> Product Category</a>
                                <ul>                                    
                                    <li><a href="{{url('admin/userlist')}}"><span class="fa fa-user"></span>Add Product Category</a></li>
                                    <li><a href="{{url('admin/userlist')}}"><span class="fa fa-user"></span>Product CategoryList</a></li>
                                </ul>
                            </li>                           
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-sign-in"></span> Products</a>
                                <ul>                                    
                                    <li><a href="{{url('admin/userlist')}}"><span class="fa fa-user"></span>Add Products</a></li>
                                    <li><a href="{{url('admin/userlist')}}"><span class="fa fa-user"></span>Products List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>                    
                    
                    
                </ul>