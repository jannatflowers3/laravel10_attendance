 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
    </div>
    <div class="sidebar-brand-text mx-3">A & A Daily Attendence </div>
</a>
<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ url('/admindashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Admin</span></a>
</li>
<!-- Divider -->

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/admindashboard') }}" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Admin</span>
    </a>
   
</li> -->

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <!-- <i class="fas fa-fw fa-wrench"></i> -->
        <i class="fas fa-fw fa-cog"></i>
        <span>Users</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Users Attendance:</h6>
            <a class="collapse-item" href="{{url('allusers')}}">All Users</a>
            <a class="collapse-item" href="/">Attendace</a>
            
        </div>
    </div>
</li>
</ul>
<!-- End of Sidebar -->