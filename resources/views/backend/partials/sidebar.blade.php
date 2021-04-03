<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="public/img/cover.jpg-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Saroar Hossain</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->




<ul class="sidebar-menu" data-widget="tree">


    <li>
        <a href="#">
            <i class="fas fa-user-md"></i> <span>Admin</span>
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
        <a href="{{route('medicines')}}">
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

    <li class="header">LABELS</li>
    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Information</span></a></li>
</ul>
</section>
</aside>
