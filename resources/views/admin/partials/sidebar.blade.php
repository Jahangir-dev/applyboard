<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">Menu</li>

    <li>
        <a href="">
            <i class="uil-home-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li>
        <a class="has-arrow waves-effect">
            <i class="uil-file-network"></i>
            <span>Country </span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{route('admin.add_Country')}}">Add Country</a></li>
            <li><a href="{{route('admin.Country.all')}}">All Country</a></li>
            {{-- <li><a href="{{ route('admin.jobs.active') }}">active</a></li>
            <li><a href="{{ route('admin.jobs.accepted') }}">accepted</a></li>

            <li><a href="{{ route('admin.jobs.review') }}">pending review</a></li>
            <li><a href="{{ route('admin.jobs.completed') }}">completed</a></li>
            <li><a href="{{ route('admin.jobs.disabled') }}">disabled</a></li> --}}
        </ul>
    </li>


    <li>
        <a class="has-arrow waves-effect">
            <i class="uil-dollar-sign-alt"></i>
            <span>Education</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
             <li><a href={{route('admin.add_Education')}}>Add Eductation </a></li>
             <li><a href="{{route('admin.all_Education')}}">All Eductation </a></li> 
         {{--   <li><a href="{{ route('admin.lottery.active') }}">active</a></li>
            <li><a href="{{ route('admin.lottery.disabled') }}">disabled</a></li>
            <li><a href="{{ route('admin.lottery.jackpot') }}">jackpot</a></li> --}}
            {{-- <li><a href="{{ route('admin.lottery.sales') }}">sales</a></li> --}}

        </ul>
    </li>
    <li>
        <a class="has-arrow waves-effect">
            <i class="uil-book-reader "></i>
            <span>Courses</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
             <li><a href="{{route('admin.add_course')}}">add Courses</a></li>
            <li><a href="">active Students</a></li>
            <li><a href="">disabled Students</a></li> 
        </ul>
    </li>
    <li>
        <a class="has-arrow waves-effect">
            <i class="uil-users-alt  "></i>
            <span>Partners</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
             <li><a href="">all Partners</a></li>
            <li><a href="">active Partners</a></li>
            <li><a href="">disabled Partners</a></li> 
        </ul>
    </li>
    <li>
        <a class="has-arrow waves-effect">
            <i class="uil-user"></i>
            <span>Student</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
             <li><a href="">all Students</a></li>
            <li><a href="">active Students</a></li>
            <li><a href="">disabled Students</a></li> 
        </ul>
    </li>

    <li>
        <a href="">
            <i class="uil-server-network-alt"></i>
            <span>Packages</span>
        </a>
    </li>

    <li>
        <a href="}">
            <i class="uil-user-exclamation "></i>
            <span>Support</span>
        </a>
    </li>

    <li>
        <a href="">
            <i class="uil-message"></i>
            <span>Messages</span>
        </a>
    </li>

    <li>
        <a href="">
            <i class="uil-cog"></i>
            <span>Settings</span>
        </a>
    </li>



</ul>
