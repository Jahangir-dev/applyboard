<div class="vertical-menu">

    <!-- LOGO -->
    {{-- <div class="navbar-brand-box">
        <a href="{{url('user/dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="\assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="\assets/images/logo-dark.png" alt="" height="20">
            </span>
        </a>

        {{-- <a href="{{url('user/dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="\assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="\assets/images/logo-light.png" alt="" height="20">
            </span>
        </a> 
    </div> --}}

    {{-- <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button> --}}

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('Student.student_home')}}" target="_self">
                        <i class="uil-home-alt"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('Student.student_search')}}" class=" waves-effect" target="_self">
                        <i class="uil-search"></i>
                        <span>Programms & School</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        {{-- <li><a href="{{ route('admin.jobs.create') }}">create</a></li> --}}
                        {{-- <li><a href="{{ route('admin.jobs.all') }}">all</a></li> --}}
                        {{-- <li><a href="{{ route('user.jobs.active') }}">active</a></li>
                        <li><a href="{{ route('user.jobs.accepted') }}">accepted</a></li>
                        <li><a href="{{ route('user.jobs.pending') }}">pending review</a></li>
                        <li><a href="{{ route('user.jobs.completed') }}">completed</a></li> --}}
                        {{-- <li><a href="{{ route('user.jobs.disabled') }}">disabled</a></li> 
                    </ul> --}}
                </li>
                <li>
                    <a href="{{route('Student.student_profile')}}" class=" waves-effect"  target="_self">
                       
                        <i class="uil-user"></i>
                        <span>Profile</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        {{-- <li><a href="{{ route('admin.jobs.create') }}">create</a></li> --}}
                        {{-- <li><a href="{{ route('admin.jobs.all') }}">all</a></li> --}}
                        {{-- <li><a href="{{ route('user.lottery.purchased') }}">Purchased</a></li> --}}
                        {{-- <li><a href="{{ route('user.jobs.accepted') }}">accepted</a></li>
                        <li><a href="{{ route('user.jobs.pending') }}">pending review</a></li>
                        <li><a href="{{ route('user.jobs.completed') }}">completed</a></li> --}}
                        {{-- <li><a href="{{ route('user.jobs.disabled') }}">disabled</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a  href="{{route('Student.student_application')}}" class=" waves-effect" target="_self">
                        <i class="uil-server-network-alt"></i>
                        <span>My Application</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('user.packages.package_purchased') }}">My Packages</a></li>
                      
                        <li><a href="{{ route('user.packages.buy_new_package') }}">Purchased New</a></li>

                      
                    </ul> --}}
                </li>
                <li>
                    <a href="{{route('Student.student_payment')}}" class=" waves-effect" href=""  target="_self">
                       
                        <i class="uil-dollar-sign-alt"></i>
                        <span>Payment</span>
                    </a>
                   
                </li>
                <li class="menu-title">Apps</li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>