<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <!-- <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Admin</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li> -->



            <li>
                <a href="{{route('home.dashboard')}}">
                    <i class="fa fa-circle-o text-aqua"></i> <span>Home</span>
                    <span class="pull-right-container">

{{--              <small class="label pull-right bg-green">Refresh</small>--}}

            </span>
                </a>
            </li>

     @if(auth()->user()->role=='admin')
            <li><a href="{{route('doctors')}}"> <i class="fa fa-user-md"></i>  <span> Doctor </span> </a></li>
            <li><a href="{{route('nurses')}}"><i class="fa fa-user-md"></i> <span> Nurse </span></a></li>
            <li><a href="{{route('departments')}}"><i class="fa fa-user-md"></i> <span> Department </span></a></li>

                <li><a href="{{route('patients')}}"><i class="fa fa-user-md"></i> <span> Patients </span></a></li>
                <li><a href="{{route('prescriptions')}}"><i class="fa fa-user-md"></i> <span> Prescription </span></a></li>
                <li><a href="{{route('medicines.view')}}"><i class="fa fa-user-md"></i> <span> Medicine </span></a></li>
                <li><a href="{{route('pharmacies')}}"><i class="fa fa-user-md"></i> <span> Pharmacy </span></a></li>
                <li class="header">LABELS</li>
                <li><a href="{{route('receptionists')}}"><i class="fa fa-circle-o text-red"></i> <span>Receptionist</span></a></li>



                <li><a href="{{route('appointments')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Today's Appointments</span></a></li>
            @endif



            //DOCTOR LOGIN

          @if(auth()->user()->role=='doctor')
            <li><a href="{{route('patients')}}"><i class="fa fa-user-md"></i> <span> Patients </span></a></li>
            <li><a href="{{route('prescriptions')}}"><i class="fa fa-user-md"></i> <span> Prescription </span></a></li>


                <li class="header">LABELS</li>



                <li><a href="{{route('appointments')}}"><i class="fa fa-circle-o text-yellow"></i> <span>Today's Appointments</span></a></li>
            @endif


{{--            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Report Generate</span></a></li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
