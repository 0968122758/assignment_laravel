<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html"style="text-decoration: none" class="brand-link">
        <img src="{{asset('backend')}}/images/logoNew.png" alt="Admin Husky" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span  class="brand-text font-weight-light">Husky Luxury</span>
    </a>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('backend')}}/images/neymar.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a style="text-decoration: none" href="#" class="d-block">@if(Auth::check()) {{Auth::user()->name}} @endif</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
                <div href="#" class="nav-link" >
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Car
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right"></span>
                    </p>
                </div>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('car.add')}}" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Car</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('car.index')}}" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Car</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <div href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        passengers
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </div>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('passengers.add')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add passengers</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('passengers.index')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List passengers</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <div href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        Post
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </div>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/UI/general.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add Post</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/UI/icons.html" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List Post</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <div style="display:block" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        User
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </div>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{asset('admin/user/add')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Add User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{asset('admin/user')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>List User</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">STATISTIC</li>
            <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Bill
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
</aside>