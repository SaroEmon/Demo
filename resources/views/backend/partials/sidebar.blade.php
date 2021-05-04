<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
{{--        <div class="user-panel">--}}

{{--            <div class="pull-left info">--}}
{{--                <p>LOG IN</p>--}}

{{--            </div>--}}
{{--        </div>--}}
        <!-- search form -->



        <!-- /.search form -->




<ul class="sidebar-menu" data-widget="tree">


    <li>
        <a href="#">
            <i class="fas fa-user-md"></i> <span>Home</span>
        </a>
    </li>
    <li>
        <a href="{{route('departments')}}">
            <i class="fas fa-user-md"></i> <span>Departments</span>
        </a>
    </li>



    <li>
        <a href="{{route('doctors')}}">
            <i class="fas fa-user-md"></i> <span>Doctor</span>
        </a>
    </li>
    <li>
        <a href="{{route('nurses')}}">
            <i class="fas fa-user-md"></i> <span>Nurse</span>
        </a>
    </li>
    <li>
        <a href="{{route('medicines.view')}}">
            <i class="fas fa-user-md"></i> <span>Medicine</span>
        </a>
        <li>
        <a href="{{route('pharmacies')}}">
            <i class="fas fa-user-md"></i> <span>Pharmacy</span>
        </a>
    </li>
    <li>
        <a href="{{route('prescriptions')}}">
            <i class="fas fa-user-md"></i> <span>Prescription</span>
        </a>
    </li>
    <li>
        <a href="{{route('patients')}}">
            <i class="fas fa-user-md"></i> <span>Patients</span>
        </a>
    </li>

    <li>
        <a href="{{route('receptionists')}}">
            <i class="fas fa-user-md"></i> <span>Receptionist</span>
        </a>
    </li>

    <li>
        <a href="{{route('appointments')}}">
            <i class="fas fa-user-md"></i> <span>Today's Appointment </span>
        </a>
    </li>
    <li class="header">LABELS</li>
    <li>
        <a href="{{route('admins')}}">
            <i class="fas fa-user-md"></i> <span>ADMIN</span>
        </a>
    </li>

</ul>
</section>
</aside>
